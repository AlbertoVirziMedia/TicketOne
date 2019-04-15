<?php

  namespace App\models;

  class Base {

    protected $db;

    public function _construct($sdb) {
      $this->db = $db;

    }

  }
