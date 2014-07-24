<?php require("modules/header.php"); ?>

<div id="contents" class="clearfix">

<div id="main">

<h2>研究事例：町田 裕樹</h2>

<h3>研究概要</h3>
<div class="sectionBorder clearfix">
<h4>音楽におけるジャンルの親和性に応じた楽曲推薦システム</h4>
　本研究は、楽曲内の楽器の演奏方法や楽曲構成を分析し、音楽のジャンルとの親和性を計量することにより、利用者が好む楽曲ジャンルに応じた楽曲推薦システムを提案する。このジャンルとの親和性計量機能の目的は、ある特定の楽曲がロックやポップスのような楽曲ジャンルに固有の特徴をどの程度備えているか、という観点からその「ジャンルらしさ」を指標化し、楽曲の特徴と比較することによりジャンルと楽曲との近さを計量することである。
　携帯端末型デジタル音楽プレイヤーを用いての音楽視聴が主流となっている今、プレイヤー内のいくつかの曲を組み合わせて一つのリストにまとめるプレイリストの作成は日常的な作業の一つとなっている。しかしながら膨大な楽曲を想定した場合、人手によるプレイリスト作成には限界があり、音楽が死蔵されていく恐れがある。とくにデジタル音楽プレイヤーや音楽再生機能を有するスマートフォンの大容量化に伴い、プレイリストに入れられなかった音楽の数は大きくなる傾向にある。
　そこで本研究では、音楽の音の構成から楽曲が備えるジャンルを左右する特徴を抽出することにより「ジャンルらしさ」の指標を実現し、その指標をもとに楽曲間の親和性を計算する。本方式の特徴は、一つの楽曲について、それぞれのジャンルが有する固有の特徴との距離を計量し、ジャンルを属性とするベクトル空間において楽曲間の類似性を計量することにより、直観的なプレイリストの自動生成を可能にする点にある。

</div>
<div class="sectionBorder clearfix">
<p><img src="img/research/yuki-machida_00.png" /></p>
</div>

<h3>Abstract</h3>
<div class="sectionBorder">
<h4>Music Recommendation System Using Affinity of Genres Between Songs</h4>
	In recent years, the act of combining number of songs into a list to create one's own playlist within the music player, is becoming one of the daily processes for many users.  However, with data capacity of portable digital music player and smartphones with music playing function rising as time progresses, the number of songs not getting included into the playlist keeps ascending.  Considering the vast number of songs that already exist, as well as the fact that new tunes are created every single day, it is likely that some of the music are stored away and barely be exposed by the listener.
	In this paper, we propose a music recommendation system that uses affinity between songs as the index.  This system calculates the affinity between songs according to musical characteristics indigenous to various genres of music.  The objective of this calculation is to compare a subjected song to various genres in order to generate the "genre-alike index".  The "genre-alike index" is structured upon the degree of musical characteristics peculiar to various genres, like rock or pop, that a subjected song possesses.
	This system calculates similarity between songs by applying inner product in a vector space, according to the musical features corresponding to different genres.  The significant feature of this system is an affinity-oriented metric space for calculating the distance of a song to certain features indigenous to each genre.  
With this feature, the system manages overlapping genres that coincide within a song.  This management capability enables to automatically form an intuitive playlist within the music player, as compared to existing music recommendation system that was only able to deal with one genre information per a song.

</div>

<!-- / #main --></div>

<?php require("modules/sub.php"); ?>

<!-- / #contents --></div>

<?php require("modules/footer.php"); ?>