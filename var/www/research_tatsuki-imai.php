<?php require("modules/header.php"); ?>

<div id="contents" class="clearfix">

<div id="main">

<h2>研究事例：今井 樹</h2>

<h3>研究概要</h3>
<div class="sectionBorder clearfix">
<h4>楽曲間の類似度をセクション別に可視化し、楽曲間の動的なナビゲーションを実現する音楽検索システムcode-cube</h4>
<p>本研究では、音楽データベースを対象として、楽曲におけるコード進行を分析し、楽曲のセクション別に計量された類似度を3次元空間上に可視化する 事により、楽曲間の動的かつ直感的なナビゲーションの実現方式を提案する。本研究の特徴は、コードを構成音に分解し、音楽理論における五度圏表を 用いて構成した12次元の構成音空間に写像する事により、コード進行におけるコード間の意味的な移動距離を計量する点にある。このコード進行の距 離モデルにより、楽曲内のコード進行がもたらす印象の変化量を計量し、直感的な楽曲間の類似性計量を実現している。本システムでは、膨大な数の データベース内の楽曲をセクション別に分析・類似度算出し、任意の基準曲とデータベース内の距離を、3次元空間の座標として設定することにより、 ユーザーは任意の楽曲を基準とした楽曲間の比較が可能となる。</p>
</div>
<div class="sectionBorder clearfix">
<p><img src="img/research/tatsuki-imai_00.png" /></p>
</div>
<h3>Abstract</h3>
<div class="sectionBorder">
<h4>Chord-Cube: Music Visualization & Navigation System with a Metric Space to Detect Changes of Sentiments</h4>
This paper presents new music visual-navigation
system that provides a customizable three-dimensional visualization engine, chord-cube, for rendering semantic distance between music. Unique feature of this three-dimensional visualization is that it is a content-based music analysis to shows users to recognize multiple relationships between music. For example, this visualization mechanism uses Introductive-melody, Continued-melody, and Bridge as axis in order to render the content-based relevance with a timeline structure. On this visualized images, this system provides navigation of songs in this three-dimensional space. This system input music as an origin point from users to create a 3D cube that locates many music according to the similarity to the origin music. As an application of this system, this visualization system enable to create new 3D space by multiple axis based on artists that selected by user for showing user to recognize comparison between a song and multiple artists.
</div>

<h3>関連資料</h3>
<div class="sectionBorder">
<ul>
<li><a href="pdf/ORF2012_imai.pdf" target="_blank"><img src="img/icon_pdf.png" />SFC Open Research Forum 2012 ポスター発表資料</a></li>
</ul>
</div>

<!-- / #main --></div>

<?php require("modules/sub.php"); ?>

<!-- / #contents --></div>

<?php require("modules/footer.php"); ?>