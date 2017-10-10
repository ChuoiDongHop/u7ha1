<?php require_once 'helper/tag_helper.php'; ?>

<?php
$index = 0;
?>

<div class="container">
   <div class="main-title">
      <?php echo $title; ?>
   </div>

   <?php
   $vocabularies = array(
       '',
       'わたし', 'わたしたち', 'あなた', 'あの人', 'あの方', '皆さん',
       '',
       '～さん', '～ちゃん', '～君', '～人',
       '',
       '先生', '教師', '学生', '会社員', '社員', '銀行員', '医者', '研究者', 'エンジニア',
       '',
       '大学', '病院',
       '',
       '電気',
       '',
       'だれ', 'どなた',
       '',
       '—歳', '何歳', 'おいくつ',
       '',
       'はい', 'いいえ',
       '',
       '失礼ですが', 'お名前は？', '初めまして。', 'どうぞよろしく[お願いします]。',
       'こちらは～さんです。', '～から来ました。',
       '',
       'アメリカ', 'イギリス', 'インド', 'インドネシア', '韓国', 'タイ', '中国',
       'ドイツ', '日本', 'フランス', 'ブラジル'
   );

   foreach ($vocabularies as $vocabulary):
      ?>
      <?php if ($vocabulary == ''): ?>
         <div class="segment">
            <div class="content">
               <div class="heading-1 row">
                  <div class="col-sm-1">#</div>
                  <div class="col-sm">Từ vựng</div>
                  <div class="col-sm"></div>
                  <div class="col-sm">Hán Việt</div>
                  <div class="col-sm">Romanji</div>
                  <div class="col-sm-3">Nghĩa</div>
               </div>
            <?php else: ?>
               <div class="vocabulary row" key="<?php echo $vocabulary; ?>">
                  <div class="index col-sm-1">
                     <?php
                     $index++;
                     echo $index;
                     ?>
                  </div>
                  <div class="content col-sm"></div>
                  <div class="furigana col-sm"></div>
                  <div class="han-viet col-sm"></div>
                  <div class="romanji col-sm"></div>
                  <div class="meaning col-sm-3"></div>
               </div>
            <?php endif; ?>
            <?php if ($vocabulary == ''): ?>
            </div>
         </div>
      <?php endif; ?>
   <?php endforeach; ?>
</div>

<?php if (BUILD_TYPE == BuildType::Normal): ?>
   <script>
      $(document).ready(function () {
         $('.u7ha1-chapter').u7ha1('initialize');
         $('.u7ha1-chapter').u7ha1('vocabularies');
      });
   </script>
<?php endif; ?>
