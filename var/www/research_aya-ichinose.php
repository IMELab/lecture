<?php require("modules/header.php"); ?>

<div id="contents" class="clearfix">

<div id="main">

<h2>研究事例：市瀬 綾</h2>

<h3>研究概要</h3>
<div class="sectionBorder clearfix">
<h4>時系列印象変化抽出機能を有する音楽検索データベースによる異種メディア装飾支援機構の実現</h4>
近年，一般利用者を対象としたマルチメディア作成ツールの普及に伴い，一般利用者が，既存のさまざまなメディアデータを編集・統合し，新たな動画作品を作り出し投稿する，“マッシュアップ”や“リミックス”と呼ばれる方法によりコンテンツを作成するようになっている．このマッシュアップにおいては，主題となるメディアデータを，複数の異なるメディアデータを用いて装飾するため，適切なメディアデータを検索・獲得することが重要となる．しかしながら，多数かつ多様な音楽データから，楽曲デコレーションにおけるコンテキストを満たした楽曲を利用者が直ちに見つけ出すことは困難である．そこで，本研究では，メディアデータの構造分析による部分的時区間の選択機能を有する，音楽検索データベースによる異種メディア装飾支援機構の実現方式を提案する．本システムは，選択した部分的時区間を対象として，感性特徴分析を適用し，楽曲の内容的・時系列的・構造的関連性の集約的な可視化を行うことにより，他メディアと関連付けるべき時間軸中の箇所を直感的に選択可能とするメディアデコレーション環境を実現する．本システムの特徴は，時間的に変化する特徴量を有する音楽メディアデータの印象メタデータ抽出において，視聴者が感じる印象に強い相関を持つ時間軸を選択することにより，楽曲全体をメタデータとして要約することによって生じる印象の曖昧性の排除する点にある．本研究における特徴的な時間軸とは，繰り返しやサビのような楽曲構造に基づいた部分的な時間軸を指し，作曲者が音の高さや強さ，リズム，テンポ，メロディー，ハーモニー，調性などの音楽の要素を操作し，音楽を部分的なまとまりとして認知できるよう演出したものである．本研究の実現により，利用者は印象語を用いた楽曲構造をクエリとして，それぞれの楽曲において特徴的な印象変化やストーリー展開に応じた音楽獲得が可能となる．音楽の時系列的な変化の類似性を反映した音楽獲得の実現により，映像メディアデータや音声メディアデータなどの時系列メディアデータを対象とした装飾環境への応用が可能である．

</div>

<h3>Abstract</h3>
<div class="sectionBorder">
<h4>An Emotion-based Cross-Multimedia Database System</h4>
Due to the proliferation of a large number of digital multimedia data on the Internet, many users publish their own contents such as music, speeches, videos, images. 

Users take a new media creation method, called "remix" or "mash-up", that decorates a subjective multimedia data by using decorative contents. 
A mash-up mechanism for those multimedia data is useful for users who integrate the value of them.

It is not easy to find a decorative music, which is suitable to the subjective data, from the vast array of music items, because listening music is a time-consuming task. 
Despite the fact that many music-search engines exist for this purpose, extensive manual tweaking and heuristic trial-and-error are still required for users to find their desired music. 

This paper presents an emotion-based cross-multimedia database system to realize a decoration environment for visualizing music and evaluating time-dependent status of the decoration context. 

This system provides the automatic impressive section selector that analyzes an emotional context of music along with a timeline. 
A unique effect of this selector is a removal of ambiguity in digesting whole timeline in single metadata structure, by visualizing time-dependent status of impressive sections. 
An impressive section is a musical structure such as a reputation and a bridge. 
The selector function recognizes the reputation and bridge by analyzing temporal change of musical items, such as pitch, velocity, rhythm, tempo, melody, harmony and tonality. 

The impressive sections are effective data structure to visualize cross-media relationship between music and another multimedia contents by computing relevance in the impressive feature vectors. 

This visualization allow users for decorating a subjective data by recognizing an impression structure of music as a sequential set of emotive words along with a timeline. 
This intuitive music retrieval and decoration mechanism facilitates users to share musical knowledge and know-how about decoration.

</div>

<h3>関連資料</h3>
<div class="sectionBorder">
<ul>
<li><a href="pdf/ORF2011_ichinose.pdf" target="_blank"><img src="img/icon_pdf.png" />SFC Open Research Forum 2011 ポスター発表資料</a></li>
</ul>
</div>

<!-- / #main --></div>

<?php require("modules/sub.php"); ?>

<!-- / #contents --></div>

<?php require("modules/footer.php"); ?>