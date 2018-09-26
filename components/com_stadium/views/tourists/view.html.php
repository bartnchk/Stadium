<?php

defined('_JEXEC') or die();

class StadiumViewTourists extends JViewLegacy {

    protected $contacts;
    protected $administration;
    protected $presentation;
    protected $achievements;
    protected $map;
    protected $photos;
    protected $rules;
    protected $points;
    protected $hotels;
    protected $sights;

    public function display($tpl = NULL)
    {
        $this->contacts = $this->get('contacts');
        $this->administration = $this->get('administration');
        $this->presentation = $this->get('presentation');
        $this->achievements = $this->presentation->achievements;
        $this->achievements = json_decode($this->achievements);
        $this->map = $this->get('map');
        $this->photos = $this->get('photos');
        $this->rules = $this->get('rules');
        $this->points = $this->get('points');
        $this->hotels = $this->get('hotels');
        $this->sights = $this->get('sights');
        unset($this->presentation->achievements);

        parent::display($tpl);
    }
}