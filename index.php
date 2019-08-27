<?php get_header(); ?>
	<main>
    <div class="jumbotron  my-jumbotron">
      <h2 class="display-4 embed-responsive">Byakunensou.</h2>
      <hr class="my-4">
    </div>
	<div class="container-fluid">
		<div class="row mt-3 mb-3">
  			<div class="col-md-8 col-12">
            <h3 class="text-success">ここにしかないもの。百年草</h3>
            <p>ホテル、フレンチレストラン、足助ハムのZiZi工房、ベーカリーバーバラはうす、日帰り入浴などの機能の他、社会福祉協議会による介護デイサービス施設も兼ね備えた、福祉と観光をミックスさせた新しい形の施設です。</p>
            <a href="#menu" class="btn btn-info">メニューを見る</a>
            <a href="#shop" class="btn btn-info">店舗情報を見る</a>
  			</div>
	</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 bg-infog">
			  <div class="py-4">
    <section id="information">
      <div class="container bg-infog no-gutters">
        <h3 class="mb-3 text-info">Information</h3>
        <p>百年草（ひゃくねんそう）は、愛知県豊田市足助町（あすけちょう）にあります。大自然に囲まれて、こだわりの食事、ハム、ウインナー、パンと、美味しい空気と美しい景色をご堪能ください。</p>
        <div class="row">
          <div class="col">
            <section id="shop">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>店名</th>
                    <td>百年草</td>
                  </tr>
                  <tr>
                    <th>住所</th>
                    <td>〒444-2424 愛知県豊田市足助町東貝戸10</td>
                  </tr>
                  <tr>
                    <th>電話番号</th>
                    <td>0565-62-0100</td>
                  </tr>
                  <tr>
                    <th>定休日</th>
                    <td>毎週水曜日（正月、GW、8月、11月は営業）</td>
                  </tr>
                  <tr>
                    <th>クレジットカード</th>
                    <td>利用可能</td>
                  </tr>
                  <tr>
                    <th>禁煙席</th>
                    <td>喫煙席なし</td>
                  </tr>
                  <tr>
                    <th>駐車場</th>
                    <td>駐車場あり</td>
                  </tr>
				　 <tr>
                    <th>Wi-Fi環境</th>
                    <td>あり</td>
                  </tr>
				</tbody>
			</table>
			<h4><span class="badge badge-secondary badge-info">営業時間</span></h4>
             <table class="table table-hover">
                  <tr>
					<th>フロント</th>
                    <td>8:00～18:00</td>
				  </tr>
                  <tr>
                    <th>一般入浴</th>
                    <td>10:00～16:30受付終了(17:00)</td>
                  </tr>
                  <tr>
                    <th>喫茶櫟</th>
                    <td>9:00～16:30</td>
                  </tr>
                  <tr>
                    <th>レストラン楓</th>
                    <td><span class="badge badge-pill badge-success">Lunch</span>11:00～14:00<br>
						<span class="badge badge-pill badge-success">Dinner</span>17:30～19:30LO<br></td>
                  </tr>
                  <tr>
                    <th>ZiZi工房</th>
                    <td>9:00～16:00</td>
                  </tr>
				  <tr>
                    <th>バーバラはうす</th>
                    <td>8:30~16:00</td>
                  </tr>
                </tbody>
              </table>
			  	<h4><span class="badge badge-pill badge-warning text-danger">ZiZi工房　外焼イベント情報</span></h4>
				<p>◎イベントにてZiZi工房の炭焼きフランクフルトを販売しております。みなさんぜひお近くの際はお立ち寄りください。</p>
			<p><strong class="text-info">5月のイベント</strong></p>
				<li>5/2～5/3　ガーデニングフェスタ(豊田スタジアム)</li>
				<li>5/3～5/5　足助ルネッサンス(三州足助屋敷)</li>
				<li>5/11　豊田地協メーデー＆フェスティバル(みよし市文化センター)</li>
				<li>5/12　名古屋グランパスの試合(豊田スタジアム)</li>
				<li>5/12　いすずクラシックフェスタ(足助町宮町駐車場内)</li>
				<li>5/18　イオンスタイル豊田(イオンスタイル豊田駐車場)</li>
				<li>5/26　名古屋グランパスの試合(豊田スタジアム)</li>
            </section>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<div class="col-md-9 no-gutters">
	<section id="card-section">
      <div class="row no-gutters">
		  	<?php if(have_posts()): while(have_posts()):
			the_post(); ?>
        <div class="col-md-4 row-eq-height">
          <div class="card">
			  <div class="nopadding example">
            <img src="<?php the_post_thumbnail('post-thumbnails'); ?>
                  <!--カスタムフィールドを表示させる設定-->
	<p class="example">
        <?php if (get_field('food-category', $post->ID)): ?>
        <?php the_field('food-category', $post->ID); ?>
        <?php endif; ?></p>
            <div class="card-body">
              <h3 class="card-title"><?php the_title(); ?></h3>
              <p class="card-text">
<?php
if(mb_strlen($post->post_content,'UTF-8')>100){
	$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 100,'UTF-8'));
	echo $content.'……';
}else{
	echo str_replace('\n', '', strip_tags($post->post_content));
}
?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
		  <?php endwhile; endif; ?>
		</div>
	</section>
</div>
</div>
</div>


<hr>
	</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php get_footer(); ?>