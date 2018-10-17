<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller {
	
	private $articles;

	public function __construct() {
		$this->articles = array(
			array(
				"total_page" => 2
			),
			array(
				"userId" => 1,
				"id" => 1,
				"date" => "Tue, Nov 12 2013",
				"title" => "Sunt Aut Facere Repellat Provident Occaecati Excepturi Optio Reprehenderit",
				"body" => "Quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 2,
				"date" => "Tue, Nov 12 2013",
				"title" => "Qui Est Esse",
				"body" => "Est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 3,
				"date" => "Tue, Nov 12 2013",
				"title" => "Ea Molestias Quasi Exercitationem Repellat Qui Ipsa Sit Aut",
				"body" => "Et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 4,
				"date" => "Tue, Nov 12 2013",
				"title" => "Eum Et Est Occaecati",
				"body" => "Ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 5,
				"date" => "Tue, Nov 12 2013",
				"title" => "Nesciunt Quas Odio",
				"body" => "Repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 6,
				"date" => "Tue, Nov 12 2013",
				"title" => "Dolorem Eum Magni Eos Aperiam Quia",
				"body" => "Ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 7,
				"date" => "Tue, Nov 12 2013",
				"title" => "Magnam Facilis Autem",
				"body" => "Dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 8,
				"date" => "Tue, Nov 12 2013",
				"title" => "Dolorem Dolore Est Ipsam",
				"body" => "Dignissimos aperiam dolorem qui eum\nfacilis quibusdam animi sint suscipit qui sint possimus cum\nquaerat magni maiores excepturi\nipsam ut commodi dolor voluptatum modi aut vitae",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 9,
				"date" => "Tue, Nov 12 2013",
				"title" => "Nesciunt Iure Omnis Dolorem Tempora Et Accusantium",
				"body" => "Consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 1,
				"id" => 10,
				"date" => "Tue, Nov 12 2013",
				"title" => "Optio Molestias Id Quia Eum",
				"body" => "Quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 2,
				"id" => 11,
				"date" => "Tue, Nov 12 2013",
				"title" => "Et Ea Vero Quia Laudantium Autem",
				"body" => "Delectus reiciendis molestiae occaecati non minima eveniet qui voluptatibus\naccusamus in eum beatae sit\nvel qui neque voluptates ut commodi qui incidunt\nut animi commodi",
				"img" => "http://placehold.it/500x500"
			),
			array(
				"userId" => 2,
				"id" => 12,
				"date" => "Tue, Nov 12 2013",
				"title" => "In Quibusdam Tempore Odit Est Dolorem",
				"body" => "Itaque id aut magnam\npraesentium quia et ea odit et ea voluptas et\nsapiente quia nihil amet occaecati quia id voluptatem\nincidunt ea est distinctio odio",
				"img" => "http://placehold.it/500x500"
			)
		);
	}

	public function getArticles($page) {
		return response()->json(
			$this->articles,
			200
		);
	}

	public function getArticleDetail($articleId) {
		return response()->json(
			$this->articles[$articleId],
			200
		);
	}
}
