<?php require("modules/header.php"); ?>

<div id="contents" class="clearfix">

<div id="main">

<h2>研究事例：加藤 慶之</h2>

<h3>研究概要</h3>
<div class="sectionBorder clearfix">
<h4>画像印象編集による曲調指定を用いた楽曲検索システム</h4>
<p>本研究の目的は、未知の楽曲を探す利用者を対象として、利用者が心に思い描く楽曲の特徴を、画像の色彩を通じて指定可能とするこ とにより、直感的な楽曲検索エンジンを実現する点にある。本研究の特徴は、楽曲を検索する際のクエリとして、ユーザがイメージに基づき編集し た画像を利用することにより、画像の持つ視覚的に認識可能な空間的印象パラメータと、楽曲の持つ視覚的に認識困難な時間的印象パラメータの相 互変換を行う点である。これによりユーザは、楽曲印象の時間的な変化を、画像の空間的な特徴として表すクエリを作成することが可能である。</p>
</div>
<h3>Abstract</h3>
<div class="sectionBorder">
<h4>Cross-Media Retrieval for Music by Analyzing Changes of Mood with Delta Function for Detecting Impressive Behaviours</h4>
This paper proposes a system that retrieves music by accepting a sequence of images as a query representing a change of sentiments in music. The system offers a query model that utilizes image files as a media for describing users’ emotional demands for continuous changes of mood in music. This system provides two types of delta functions, corresponding to music and images. Our system achieves the cross-media retrieval by exploiting those delta functions to analyze changes of moods. The system generates the sequential values representing changes of mood by applying the delta equation to the sequence of images. This system also applies the delta equation to music for indexing. Finally the system calculates the sentiment-oriented relevance score of music and images by comparing the calculated delta values. As a prototype implementation, we have developed a Web-based cross-media retrieval engine that provides an integrated user interface (UI) to create music queries by novices who may submit only rough and simple information. 
</div>
<h3>関連資料</h3>
<div class="sectionBorder">
<ul>
<li><a href="pdf/ORF2012_kato.pdf" target="_blank"><img src="img/icon_pdf.png" />SFC Open Research Forum 2012 ポスター発表資料</a></li>
</ul>
</div>

<!-- / #main --></div>

<?php require("modules/sub.php"); ?>

<!-- / #contents --></div>

<?php require("modules/footer.php"); ?>