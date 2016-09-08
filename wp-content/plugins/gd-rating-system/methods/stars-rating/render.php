<?php

if (!defined('ABSPATH')) exit;

class gdrts_render_single_stars_rating extends gdrts_method_render {
    public function owner() {
        return gdrtsm_stars_rating();
    }

    public function classes($extra = '', $echo = true) {
        $classes = array_merge(
            array(
                'gdrts-rating-block',
                'gdrts-align-'.$this->owner()->args('alignment'),
                'gdrts-method-stars-rating',
                $this->owner()->calc('allowed') ? 'gdrts-rating-allowed' : 'gdrts-rating-forbidden',
                $this->owner()->calc('open') ? 'gdrts-rating-open' : 'gdrts-rating-closed',
                $this->owner()->args('style_class')
            ),
            gdrts_single()->item()->rating_classes()
        );

        if (!empty($extra)) {
            $classes[] = $extra;
        }

        $classes = apply_filters('gdrts_stars_rating_loop_single_classes', $classes);

        $render = join(' ', $classes);

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    public function text($atts = array(), $echo = true) {
        $defaults = array(
            'show_votes' => true,
            'show_max' => false,
            'tpl_rating' => null
        );

        $atts = wp_parse_args($atts, $defaults);

        if (is_null($atts['tpl_rating'])) {
            $atts['tpl_rating'] = __("Rating", "gd-rating-system").': <strong>%1$s</strong>';

            if ($atts['show_max']) {
                $atts['tpl_rating'].= '/%2$s';
            }

            $atts['tpl_rating'].= '.';
        }

        $render = sprintf($atts['tpl_rating'], $this->owner()->value('rating', 0), $this->owner()->value('stars', false));

        if ($atts['show_votes']) {
            $_votes = $this->owner()->value('votes', false);

            $render.= ' '.sprintf(_n("From %s vote.", "From %s votes.", $_votes, "gd-rating-system"), $_votes);
        }

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    public function user_vote($atts = array(), $echo = true) {
        $defaults = array(
            'show_time' => true,
            'show_remaining' => true
        );

        $atts = wp_parse_args($atts, $defaults);

        $render = '';

        if ($this->owner()->user()->has_voted()) {
            $vote = $this->owner()->user()->previous_vote();

            switch ($this->owner()->calc('vote')) {
                case 'single':
                    $render = __("You have already voted", "gd-rating-system").' <strong>'.$vote->meta->vote.'</strong>';
                    break;
                case 'revote':
                    $render = __("You voted", "gd-rating-system").' <strong>'.$vote->meta->vote.'</strong>';
                    break;
                case 'multi':
                    $render = __("Your previous vote was", "gd-rating-system").' <strong>'.$vote->meta->vote.'</strong>';
                    break;
            }

            if ($atts['show_time']) {
                $render.= ', '.sprintf(__("%s ago", "gd-rating-system"), human_time_diff(strtotime($vote->logged)));
            }

            $render.= '.';

            if ($atts['show_remaining']) {
                $limit = $this->owner()->calc('vote_limit');

                switch ($this->owner()->calc('vote')) {
                    case 'revote':
                        $revotes = $this->owner()->user()->count_revotes();

                        if ($revotes < $limit) {
                            $remaining = $limit - $revotes;

                            $render.= ' '.sprintf(_n("You can change your vote %s more time.", "You can change your vote %s more times.", $remaining, "gd-rating-system"), $remaining);
                        }
                        break;
                    case 'multi':
                        $votes = $this->owner()->user()->count_votes();

                        if ($votes < $limit) {
                            $remaining = $limit - $votes;

                            $render.= ' '.sprintf(_n("You can vote %s more time.", "You can vote %s more times.", $remaining, "gd-rating-system"), $remaining);
                        }
                        break;
                }
            }
        } else {
            $render = __("You have not voted yet.", "gd-rating-system");
        }

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    public function stars($atts = array(), $echo = true) {
        $defaults = array(
            'show_rating' => 'rating',
            'allow_rating' => true
        );

        $atts = wp_parse_args($atts, $defaults);

        $render = '';

        if ($this->owner()->args('style_type') == 'image') {
            $render = $this->_render_stars_image($atts);
        } else {
            $render = $this->_render_stars_font($atts);
        }

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    public function symbol($atts = array(), $echo = true) {
        $defaults = array(
            'style_type' => $this->owner()->args('style_type'),
            'style_name' => $this->owner()->args('style_name'),
            'style_size' => 140,
            'style_color' => '#ffff00',
            'font_size' => 32
        );

        $atts = wp_parse_args($atts, $defaults);

        $render = '';

        if ($this->owner()->args('style_type') == 'image') {
            $render.= '<div style="width: '.$atts['style_size'].'px; height: '.$atts['style_size'].'px;" class="gdrts-symbol-wrapper gdrts-symbol-image gdrts-image-'.$atts['style_name'].'">';
            $render.= '<div style="background-size: '.$atts['style_size'].'px auto; width: '.$atts['style_size'].'px; height: '.$atts['style_size'].'px;" class="gdrts-symbol-icon">'.'</div>';
            $render.= '<div class="gdrts-symbol-text" style="line-height: '.$atts['style_size'].'px;font-size: '.$atts['font_size'].'px">'.$this->owner()->value('rating', false).'</div>';
            $render.= '</div>';
        } else {
            $render.= '<div style="width: '.$atts['style_size'].'px; height: '.$atts['style_size'].'px;" class="gdrts-symbol-wrapper gdrts-symbol-font">';
            $render.= '<div class="gdrts-symbol-icon" style="color: '.$atts['style_color'].'; font-size: '.$atts['style_size'].'px; line-height: '.$atts['style_size'].'px;">'.gdrts()->get_font_star_char($atts['style_type'], $atts['style_name']).'</div>';
            $render.= '<div class="gdrts-symbol-text" style="line-height: '.$atts['style_size'].'px;font-size: '.$atts['font_size'].'px">'.$this->owner()->value('rating', false).'</div>';
            $render.= '</div>';
        }

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    public function distribution($atts = array(), $echo = true) {
        $defaults = array(
            'type' => $this->owner()->args('distribution')
        );

        $atts = wp_parse_args($atts, $defaults);

        $distribution = gdrts_prepare_votes_distribution($this->owner()->calc('distribution'), $this->owner()->calc('max'), $atts['type']);

        $total = 0;
        foreach ($distribution as $d) {
            $total+= $d['votes'];
        }

        $render = '<div class="gdrts-distribution-wrapper"><ul>';
        
        foreach ($distribution as $d) {
            $percentage = number_format((100 / $total) * $d['votes'], 2);

            $render.= '<li class="gdrts-clearfix">';

            $render.= '<div class="gdrts-distribution-stars">';
            $render.= '<strong>'.$d['stars'].'</strong> '._n("star", "stars", $d['stars'], "gd-rating-system");
            $render.= '</div>';
            
            $render.= '<div class="gdrts-distribution-line">';
            $render.= '<div title="'.$percentage.'%" class="gdrts-distribution-line-fill" style="width: '.$percentage.'%">'.$percentage.'%</div>';
            $render.= '</div>';

            $render.= '<div class="gdrts-distribution-votes">';
            $render.= $d['votes'].'<span> '._n("vote", "votes", $d['votes'], "gd-rating-system").'</span>';
            $render.= '</div>';

            $render.= '</li>';
        }

        $render.= '</ul></div>';

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    private function _render_classes($active = true) {
        $list = array(
            'gdrts-stars-rating',
            'gdrts-block-stars',
            $active ? 'gdrts-state-active' : 'gdrts-state-inactive',
            'gdrts-'.$this->owner()->args('style_type').'-'.$this->owner()->args('style_name'),
            'gdrts-stars-length-'.$this->owner()->calc('stars')
        );

        if ($this->owner()->args('style_type') == 'image') {
            $list[] = 'gdrts-with-image';
        } else {
            $list[] = 'gdrts-with-fonticon';
            $list[] = 'gdrts-fonticon-'.$this->owner()->args('style_type');
        }

        if (gdrts_single()->is_loop_save()) {
            $list[] = 'gdrts-loop-saving';
        }

        return join(' ', $list);
    }

    private function _render_stars_font($atts) {
        $active = $atts['allow_rating'] && $this->owner()->calc('allowed') && $this->owner()->calc('open');
        $current = $atts['show_rating'] == 'rating' ? $this->owner()->calc('current') : ($atts['show_rating'] == 'own' ? $this->owner()->calc('current_own') : 0);

        $render = '<div class="'.$this->_render_classes($active).'" style="height: '.$this->owner()->args('style_size').'px;">';
            $render.= '<span class="gdrts-stars-empty" style="color: '.$this->owner()->args('font_color_empty').'; font-size: '.$this->owner()->args('style_size').'px; line-height: '.$this->owner()->args('style_size').'px;">';
                $render.= '<span class="gdrts-stars-active" style="color: '.$this->owner()->args('font_color_active').'; width: 0%"></span>';
                $render.= '<span class="gdrts-stars-current" style="color: '.$this->owner()->args('font_color_current').'; width: '.$current.'%"></span>';
            $render.= '</span>';
        $render.= '</div>';

        return $render;
    }

    private function _render_stars_image($atts) {
        $active = $atts['allow_rating'] && $this->owner()->calc('allowed') && $this->owner()->calc('open');
        $current = $atts['show_rating'] == 'rating' ? $this->owner()->calc('current') : ($atts['show_rating'] == 'own' ? $this->owner()->calc('current_own') : 0);

        $render = '<div class="'.$this->_render_classes($active).'" style="width: '.($this->owner()->calc('stars') * $this->owner()->args('style_size')).'px; height: '.$this->owner()->args('style_size').'px;">';
            $render.= '<span class="gdrts-stars-empty" style="background-size: '.$this->owner()->args('style_size').'px;">';
                $render.= '<span class="gdrts-stars-active" style="width: 0%; background-size: '.$this->owner()->args('style_size').'px;"></span>';
                $render.= '<span class="gdrts-stars-current" style="width: '.$current.'%; background-size: '.$this->owner()->args('style_size').'px;"></span>';
            $render.= '</span>';
        $render.= '</div>';

        return $render;
    }
}

class gdrts_render_list_stars_rating extends gdrts_method_render {
    public function owner() {
        return gdrtsm_stars_rating();
    }

    public function classes($extra = '', $echo = true) {
        $classes = array(
            'gdrts-rating-list',
            'gdrts-method-stars-rating'
        );

        if (!empty($extra)) {
            $classes[] = $extra;
        }

        $classes = apply_filters('gdrts_stars_rating_loop_list_classes', $classes);

        $render = join(' ', $classes);

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    public function text($atts = array(), $echo = true) {
        $defaults = array(
            'show_votes' => true,
            'show_max' => false
        );

        $atts = wp_parse_args($atts, $defaults);

        $render = __("Rating", "gd-rating-system").':<strong> ';
        $render.= $this->owner()->value('rating', false).'</strong>';

        if ($atts['show_max']) {
            $render.= '/'.$this->owner()->value('stars', false);
        }

        if ($atts['show_votes']) {
            $_votes = $this->owner()->value('votes', false);

            $render.= ', '.sprintf(_n("from %s vote", "from %s votes", $_votes, "gd-rating-system"), $_votes).'.';
        }

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    public function stars($atts = array(), $echo = true) {
        $defaults = array();

        $atts = wp_parse_args($atts, $defaults);

        $render = '';

        if ($this->owner()->args('style_type') == 'image') {
            $render = $this->_render_stars_image($atts);
        } else {
            $render = $this->_render_stars_font($atts);
        }

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    public function symbol($atts = array(), $echo = true) {
        $defaults = array(
            'style_type' => $this->owner()->args('style_type'),
            'style_name' => $this->owner()->args('style_name'),
            'style_size' => 64,
            'font_size' => 16
        );

        $atts = wp_parse_args($atts, $defaults);

        $render = '';

        if ($this->owner()->args('style_type') == 'image') {
            $render.= '<div style="width: '.$atts['style_size'].'px; height: '.$atts['style_size'].'px;" class="gdrts-symbol-wrapper gdrts-symbol-image gdrts-image-'.$atts['style_name'].'">';
            $render.= '<div style="background-size: '.$atts['style_size'].'px auto; width: '.$atts['style_size'].'px; height: '.$atts['style_size'].'px;" class="gdrts-symbol-icon">'.'</div>';
            $render.= '<div class="gdrts-symbol-text" style="line-height: '.$atts['style_size'].'px;font-size: '.$atts['font_size'].'px">'.$this->owner()->value('rating', false).'</div>';
            $render.= '</div>';
        } else {
            $render.= '<div class="gdrts-symbol-wrapper gdrts-symbol-font">';
            $render.= '<div class="gdrts-symbol-icon">'.'</div>';
            $render.= '<div class="gdrts-symbol-text">'.'</div>';
            $render.= '</div>';
        }

        if ($echo) {
            echo $render;
        } else {
            return $render;
        }
    }

    private function _render_classes() {
        $list = array(
            'gdrts-stars-rating',
            'gdrts-block-stars',
            'gdrts-state-inactive',
            'gdrts-'.$this->owner()->args('style_type').'-'.$this->owner()->args('style_name'),
            'gdrts-stars-length-'.$this->owner()->calc('stars')
        );

        if ($this->owner()->args('style_type') == 'image') {
            $list[] = 'gdrts-with-image';
        } else {
            $list[] = 'gdrts-with-fonticon';
            $list[] = 'gdrts-fonticon-'.$this->owner()->args('style_type');
        }

        return join(' ', $list);
    }

    private function _render_stars_font($atts) {
        $current = $this->owner()->calc('current');

        $render = '<div class="'.$this->_render_classes().'" style="height: '.$this->owner()->args('style_size').'px;">';
            $render.= '<span class="gdrts-stars-empty" style="color: '.$this->owner()->args('font_color_empty').'; font-size: '.$this->owner()->args('style_size').'px; line-height: '.$this->owner()->args('style_size').'px;">';
                $render.= '<span class="gdrts-stars-current" style="color: '.$this->owner()->args('font_color_current').'; width: '.$current.'%"></span>';
            $render.= '</span>';
        $render.= '</div>';

        return $render;
    }

    private function _render_stars_image($atts) {
        $current = $this->owner()->calc('current');

        $render = '<div class="'.$this->_render_classes().'" style="width: '.($this->owner()->calc('stars') * $this->owner()->args('style_size')).'px; height: '.$this->owner()->args('style_size').'px;">';
            $render.= '<span class="gdrts-stars-empty" style="background-size: '.$this->owner()->args('style_size').'px;">';
                $render.= '<span class="gdrts-stars-current" style="width: '.$current.'%; background-size: '.$this->owner()->args('style_size').'px;"></span>';
            $render.= '</span>';
        $render.= '</div>';

        return $render;
    }
}
