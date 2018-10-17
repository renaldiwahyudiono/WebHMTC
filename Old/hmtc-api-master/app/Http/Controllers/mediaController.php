<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mediaController extends Controller {
    
    private $media;

    public function __construct() {
        $this->media = array(
            array(
                "total_media" => 10
            ),
            array(
                "media_id" => 1,
                "title" => "Bluemagz 11: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            ),
            array(
                "media_id" => 2,
                "title" => "Bluemagz 12: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            ),
            array(
                "media_id" => 3,
                "title" => "Bluemagz 13: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            ),
            array(
                "media_id" => 4,
                "title" => "Bluemagz 14: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            ),
            array(
                "media_id" => 5,
                "title" => "Bluemagz 15: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            ),
            array(
                "media_id" => 6,
                "title" => "Bluemagz 16: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            ),
            array(
                "media_id" => 7,
                "title" => "Bluemagz 17: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            ),
            array(
                "media_id" => 8,
                "title" => "Bluemagz 18: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            ),
            array(
                "media_id" => 9,
                "title" => "Bluemagz 19: Huru Hara Berita Dusta",
                "short_desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi obcaecati quia eius, nulla hic veniam autem, ex reprehenderit culpa sequi voluptate corporis. Aut quisquam nulla quibusdam eveniet sed excepturi?",
                "date" => "Tue, November 13 2013",
                "img" => "http://placehold.it/500x300",
                "issuu_link" => "https://issuu.com/medfohmtc/docs/bm11-gabung_v8"
            )
        );
    }

    public function getMediaList($page) {
        return response()->json(
            $this->media,
            200
        );
    }

    public function getMediaDetail($mediaId) {
        return response()->json(
            $this->media[$mediaId],
            200
        );
    }
}
