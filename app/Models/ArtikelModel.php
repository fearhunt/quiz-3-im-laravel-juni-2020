<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
  public static function get_all() {
    $articles = DB::table('quiz3')->get();
    return $articles;
  }

  public static function save($data) {
    unset($data["_token"]);
    $new_article = DB::table('quiz3')->insert($data);
    return $new_article;
  }

  public static function find_by_id($id) {
    $data = DB::table('quiz3')->where('id', $id)->first();
    return $data;
  }

  public static function update($id, $request) {
    $data = DB::table('quiz3')->where('id', $id)->update(['isi' => $request["isi"]]);
    return $data;
  }

  public static function delete($id) {
    $deleted = DB::table('quiz3')->where('id', $id)->delete();
    return $deleted;
  }
}