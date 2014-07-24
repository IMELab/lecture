<?php require("modules/header.php"); ?>

<div id="contents" class="clearfix">

<div id="main">

<h2>研究事例：加嵜 長門</h2>

<h3>研究概要</h3>
<div class="sectionBorder clearfix">
<h4>学習者の状況・嗜好に応じた教材配信機能を有する体験連動型マルチリンガル外国語e-Learningシステム</h4>
今日，モバイルコンピューティング技術の発達と携帯端末・無線通信インフラの普及に伴い，日常生活の活動において多様なマルチメディア学習教材を活用する，新しい学習スタイルの実現が可能となりつつある．この学習スタイルは，学習者が，日常生活における様々な体験（買い物，旅行，食事など）に応じて，新しい知識を獲得したり，既に学習した知識を実践したりすることにより，日常生活そのものを学習の場とする学習スタイルである．

しかし，学習者の体験と，その体験に応じた知識（学習教材）との組み合わせは膨大であり，それらの適切な組み合わせをあらかじめ定義しておくことは難しい．

そこで，本研究では，学習者の体験と学習教材とを動的に関連付けることにより，学習者の実践的知識獲得を実現する体験連動型 e-Learning システムを提案する．

本システムの特徴は，直接的には関連付けられていない体験と教材との間の相関量を，学習者の興味関心や学習進度などの個人の特徴に応じて計量し，動的に両者の関連付けを行うことである．

本システムの利点は，1) あらかじめ体験と教材との関連を定義しておく方式と比較して，より多くの体験や教材を扱うことができる，2) 学習者の体験をきっかけとして自動的に教材を提供するため，学習者に教材検索作業の負担を強いる必要がない，3) 学習者の特徴に応じて配信教材セットを個人化することにより，学習者の学習意欲を高く保つことができる，などの点が挙げられる．

学習者の体験に応じた教材配信を実現するために，本システムは次の3機能を有する：
機能1) モバイル端末からセンシングした情報から，体験を表現する特徴語を次元とするベクトルメタデータを生成する．
機能2)  体験メタデータベクトルを，学習者の特徴に応じて作成した変換マトリクスにより，教材検索のためのクエリベクトルに変換する．
機能3) クエリベクトルから，体験と教材との相関量を計算し，相関量順のランキング形式で教材群を配信する．

本システムの応用として，体験と教材とが直接的には関連付けられていないという特徴を生かした，多地域・多言語に対応する教材配信システムの実現が可能となる．例えば，語学学校において学んだ教材を，海外研修先の体験に応じて配信し，知識の実践を支援するシステムや，留学生が集まるグローバルキャンパスにおいて，留学生の母国語や学習言語に応じて配信教材を切り替える，マルチリンガル学習システムなどが挙げられる．


</div>

<h3>Abstract</h3>
<div class="sectionBorder">
<h4>An Experience-Connected e-Learning System with a Personalization Mechanism for Learners' Situations and Preferences</h4>
Mobile computing technology makes the daily life a learning environment for experiential learning.
The mobile computing devices facilitate the experiential learning that connects learning materials into our daily life experiences.
Various multimedia learning materials are available with high performance mobile devices throw global wireless infrastructure.

However, the learning materials are difficult to prepare for every situation in the daily life. The learning materials have to be linked with daily experiences for the purpose of experiential learning.

Thus, this research proposes an "experience-connected" e-Learning system that facilitates users to learn the practical knowledge by dynamically associating experiences with learning materials.

The feature of the system is that the system dynamically associates the experiences with the learning materials which are not directly related. The system calculates correlations between them as to the learners' preferences and the curricular adequacy.

The advantages of the system are as follows: 1) the system can manage more kinds of experiences and learning materials compared to other systems which define the static relevance of them; 2) learners can save the trouble of retrieval by automatically acquiring learning materials depending on their experiences; 3) the learners keep their motivation high by getting the learning materials appropriate to their interests and preferences.

The system has 3 functions to deliver the learning materials related to learners' experiences as follows: function 1) to generate the experience metadata, which is the feature dimension vectors describing the learners' daily experiences, according to the learners' situation sensed by the mobile devices, function 2) to transform the experience metadata into a query vector by using the personalized transmission matrix, and function 3) to retrieve the adequate learning materials ranked by the correlation with the query vector.

The application of the system is to deal with multiple languages and to be used in various situations because the system requires no preliminarily defined relation between the experiences and the learning materials. For example, we can proposed an application to support learners' practice of knowledge by providing on their overseas training the materials which they have learned in the language school. Another application of the system is the multilingual learning system to switch the kind of language of the materials in response to the demands of foreign students coming from various regions to the global campus.


</div>

<h3>関連資料</h3>
<div class="sectionBorder">
<ul>
<li><a href="pdf/ORF2011_kasaki.pdf" target="_blank"><img src="img/icon_pdf.png" />SFC Open Research Forum 2011 ポスター発表資料</a></li>
</ul>
</div>

<!-- / #main --></div>

<?php require("modules/sub.php"); ?>

<!-- / #contents --></div>

<?php require("modules/footer.php"); ?>