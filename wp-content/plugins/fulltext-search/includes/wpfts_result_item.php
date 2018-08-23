<?php

/**  
 * Copyright 2013-2018 Epsiloncool
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 ******************************************************************************
 *  I am thank you for the help by buying PRO version of this plugin 
 *  at https://fulltextsearch.org/ 
 *  It will keep me working further on this useful product.
 ******************************************************************************
 * 
 *  @copyright 2013-2018
 *  @license GPL v3
 *  @package Wordpress Fulltext Search Pro
 *  @author Epsiloncool <info@e-wm.org>
 */

require_once dirname(__FILE__).'/wpfts_tokencollector.php';

class WPFTS_Result_Item
{
	protected $_demodata = array(
		'post_link' => '/the-secret-lives-of-intps/',
		'post_title' => 'The Secret Lives of INTPs',
		'file_link' => '/wp-content/uploads/2018/03/The-Secret-Lives-of-INTPs.pdf',
		'post_excerpt' => 'An <b>INTP</b> <b>child</b> may enjoy constructing pens, building  tunnel systems for rodents, and laying out aquariums and terrariums. An <b>INTP</b> <b>Family</b> What about an <b>INTP</b> <b>family</b> setting? Thus, a listener can conclude that the speaker saw an eagle-like <b>bird</b> flying over what should probably  be considered a smallish hill exactly fourteen days previously.',
		'score' => 0.17,
		'filesize' => 1720000,
		'not_found_words' => array('timeliness', 'iridescence'),
	);
	public $demo_mode = false;
	public $post = array();
	public $is_post = false;

	public function __construct($post_id = false)
	{
		$this->post = array();
		$this->is_post = false;

		if ($post_id === false) {
			$this->demo_mode = true;
		} else {
			$this->demo_mode = false;
			$this->post = get_post($post_id, ARRAY_A);
			if ($this->post) {
				$this->is_post = true;
			}
		}
	}

	public function TitleLink($link = false)
	{
		global $wpfts_core;

		if ($this->demo_mode) {
			return $this->_demodata['post_link'];
		} else {
			// Real case
			if ($link !== false) {
				return $link;
			} else {
				return get_permalink($this->post['ID']);
			}
		}
	}

	public function TitleText($title = false)
	{
		global $wpfts_core;

		if ($this->demo_mode) {
			$post_title = $this->_demodata['post_title'];
		} else {
			// Real case
			if ($title !== false) {
				$post_title = $title;
			} else {
				if (($this->is_post) && (isset($this->post['post_title']))) {
					$post_title = $this->post['post_title'];
				} else {
					$post_title = '';
				}
			}
		}
		return $post_title;
	}

	public function GetExcData($query = '')
	{
		//ini_set('pcre.jit', 0);

		global $wpfts_core;

		$fulltext = '';
		$fulltext = apply_filters('the_content', $this->post['post_content']);
		$fulltext = strip_tags(apply_filters('wpfts_get_fulltext', $fulltext, $this->post['ID']));
		$fulltext = preg_replace('~\s+~', ' ', $fulltext);

		$ws = $wpfts_core->split_to_words($query);

		$fulltext = preg_replace('~([\.\!\?]\s|\W{4,}?)~u', '$1'."\n", $fulltext);

		$sents = array();
		$ii = 0;
		foreach ($ws as $w) {
			preg_match_all('~(.*'.$w.'.*)~iu', $fulltext, $zz, PREG_OFFSET_CAPTURE);
			$ssa = array();
			if (isset($zz[0])) {
				// A list of sentences and offsets
				foreach ($zz[0] as $kk => $dd) {
					$ssa[$dd[1]] = array($dd[0], $zz[2][$kk][1] - $dd[1]);
				}
			}
			$sents['t'.$ii] = $ssa;
			$ii ++;
		}

		$tc = new WPFTS_TokenCollector();
		$tc->tokenlist = $sents;

		$nominal_length = intval($wpfts_core->get_option('optimal_length'));
		if ($nominal_length < 10) {
			$nominal_length = 300;
		}

		$minlength = $nominal_length * 0.9;
		$maxlength = $nominal_length * 1.1;

		$goal = '';
		for ($i = 0; $i < count($sents); $i ++) {
			$goal .= ''.$i;
		}

		$fullgoal = $goal;

		$bestsentenses = array();
		$total_length = 0;
		$outt = array();
		$is_goal_done = false;

		while (true) {

			$goal = $fullgoal;

			$wdt = strlen($goal);

			$is_found_any = false;
			$is_can_not_more = false;
			$is_filled = false;

			while (strlen($goal) > 0) {
				$mp = $tc->GetMostPowerful($goal, $fullgoal, $outt);
				if ($mp && isset($mp[1]) && (count($mp[1]) > 0)) {

					if (strlen($mp[0]) > 1) {
						$t_ordered = $tc->GetOrderedByLessDistance($mp);
					} else {
						$t_ordered = $mp;
					}
					$bestsentenses[] = $t_ordered;
					if (count($t_ordered[1]) > 0) {
						$tt = $t_ordered[1];
						reset($tt);
						$t_key = key($tt);
						$t_val = current($tt);

						$ss = trim($t_val[0]);
						$ss_len = mb_strlen($ss, 'utf-8');

						$new_length = $total_length + $ss_len;

						if ($new_length > $maxlength) {
							$is_filled = true;
							break;
						} else {
							$outt[$t_key] = $ss;
							$total_length += $new_length;
						}
					}
					$b = '';
					for ($i = 0; $i < strlen($goal); $i ++) {
						if (strpos($mp[0], $goal[$i]) === false) {
							$b .= $goal[$i];
						}
					}

					$goal = $b;

				} else {
					if (!$is_found_any) {
						$is_can_not_more = true;
					}
					break;
				}
				$is_found_any = true;
				$wdt --;
				if ($wdt < 0) {
					break;
				}
			}
			if (($total_length > $minlength) || ($is_can_not_more) || $is_filled) {
				break;
			}
			if (strlen($goal) < 1) {
				$is_goal_done = true;
			}
		}

		uksort($outt, function($v1, $v2){
			return $v1 > $v2;
		});

		$outtext = implode(" ", $outt);

		foreach ($ws as $w) {
			$outtext = preg_replace("/\p{L}*?".preg_quote($w)."\p{L}*/ui", "<b>$0</b>", $outtext);
		}

		$goal_words = array();
		if (!$is_goal_done) {
			for ($i = 0; $i < strlen($goal); $i ++) {
				if (isset($ws[$goal[$i]])) {
					$goal_words[] = $ws[$goal[$i]];
				}
			}
		}

		return array(
			'text' => $outtext,
			'no_words' => $goal_words,
		);
	}

	public function Excerpt($query = '')
	{
		global $wpfts_core;
		
		if ($this->demo_mode) {
			$excerpt_text = $this->_demodata['post_excerpt'];
			$score = $this->_demodata['score'];
			$nf_words = $this->_demodata['not_found_words'];
		} else {
			$score = isset($this->post['relev']) ? $this->post['relev'] : 0;
			$excdata = $this->GetExcData($query);
			$excerpt_text = $excdata['text'];
			$nf_words = $excdata['no_words'];
		}
		
		$s = '';
		if (intval($wpfts_core->get_option('is_smart_excerpt_text')) != 0) {
			$s .= '<div class="wpfts-smart-excerpt">'.$excerpt_text.'</div>';
		}
		if ((intval($wpfts_core->get_option('is_not_found_words')) != 0) && (count($nf_words) > 0)) {
			$nfs = array();
			foreach ($nf_words as $dd) {
				$nfs[] = '<s>'.$dd.'</s>';
			}
			$s .= '<div class="wpfts-not-found"><span>'.__('Not found', 'wpfts_lang').': '.implode(' ', $nfs).'</span></div>';
		}
		$bottoms = array();
		if ((intval($wpfts_core->get_option('is_show_score')) != 0) && ($score > 0.001)) {
			$bottoms[] = '<span class="wpfts-score">'.__('Score', 'wpfts_lang').': '.number_format_i18n($score, 2).'</span>';
		}

		if (count($bottoms) > 0) {
			$s .= '<div class="wpfts-bottom-row">'.implode(' ', $bottoms).'</div>';
		}

		return $s;
	}


}