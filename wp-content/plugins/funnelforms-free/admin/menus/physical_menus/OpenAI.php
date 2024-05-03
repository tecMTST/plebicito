<?php

require_once FNSF_AF2_MENU_PARENTS_CLASS;

class FNSF_Af2OpenAI extends Fnsf_Af2MenuCustom {

    protected function fnsf_get_heading() { return 'Funnelforms AI'; }
    protected function fnsf_get_menu_custom_template() { return FNSF_AF2_CUSTOM_MENU_OPENAI; }

    protected function fnsf_get_menu_blur_option_() { return true; }

    protected function fnsf_get_af2_custom_contents_() { }

    protected function fnsf_load_resources() {
        parent::fnsf_load_resources();
    }
}