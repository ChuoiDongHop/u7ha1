<?php require_once 'helper/tag_helper.php'; ?>

<div class="container">
   <div class="main-title">
      <?php echo $title ?>
   </div>

   <div class="heading-1">
      <span class="numbering">1.</span>
      <?php v('これ'); ?>／
      <?php v('それ'); ?>／
      <?php v('あれ'); ?>
   </div>

   <div class="segment">
      <div class="content">
         <?php vb('これ', true); ?>
         <?php vb('それ', true); ?>
         và
         <?php vb('あれ', true); ?>
         là những đại từ chỉ thị. Về mặt ngữ pháp chúng được dùng như những danh từ.<br />
         <?php vb('これ', true); ?>dùng để chỉ một vật ở gần người nói.<br />
         <?php vb('それ', true); ?>dùng để chỉ một vật ở gần người nghe.<br />
         <?php vb('あれ', true); ?>dùng để chỉ một vật ở xa người nói và người nghe.<br />

         <span class="numbering circle">1</span>&#x3000;
         <?php vb('それ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('辞書'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000; Đó có phải là quyển từ điển không?<br />

         <span class="numbering circle">2</span>&#x3000;
         <?php vb('これ'); ?>&#x3000;
         <?php v('を'); ?>&#x3000;
         <?php v('ください'); ?>。<br />
         &#x3000;&#x3000; Cho tôi cái này. (Bài 3)<br />
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">2.</span>
      <?php v('この'); ?>&#x0020;
      Danh từ／
      <?php v('その'); ?>&#x0020;
      Danh từ／
      <?php v('あの'); ?>&#x0020;
      Danh từ</span>
   </div>

   <div class="segment">
      <div class="content">
         <?php vb('この', true); ?>
         <?php vb('その', true); ?>
         <?php vb('あの', true); ?>
         bổ nghĩa cho danh từ.<br />

         <span class="text bold d-inline-block">
            「<?php v('この'); ?>&#x0020;Danh từ」
         </span>
         dùng để nói tới một vật hay một người nào đó ở gần người nói.<br />
         <span class="text bold d-inline-block">
            「<?php v('その'); ?>&#x0020;Danh từ」
         </span>
         dùng để nói tới một vật hay một người nào đó ở gần người nghe.<br />
         <span class="text bold d-inline-block">
            「<?php v('あの'); ?>&#x0020;Danh từ」
         </span>
         dùng để nói tới một vật hay một người nào đó xa cả người nói và người nghe.<br />

         <span class="numbering circle">3</span>&#x3000;
         <?php vb('あの'); ?>&#x0020;
         <?php v('本'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('わたし'); ?>&#x3000;
         <?php vb('です'); ?>。<br />
         &#x3000;&#x3000;Quyển sách này là của tôi.<br />

         <span class="numbering circle">4</span>&#x3000;
         <?php vb('あの'); ?>&#x0020;
         <?php v('方'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('どなた'); ?>&#x3000;
         <?php vb('です'); ?>
         <?php vb('か'); ?>。<br />
         &#x3000;&#x3000;Vị kia là ai?<br />
         <div class="text-center">
            <img src="<?php echo HOST; ?>/imgs/chapter_2/img_0.png">
         </div>
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">3.</span>
      <?php v('そうです'); ?>／
      <?php v('そうじゃありません'); ?>
   </div>

   <div class="segment">
      <div class="content">
         <span class="text bold d-inline-block">
            「<?php v('そうです'); ?>／
            <?php v('そうじゃありません'); ?>」
         </span>
         được dùng trong câu nghi vấn danh từ để xác định xem một nội dung nào đó là đúng hay sai.
         Khi đúng thì trả lời là
         <span class="text bold d-inline-block">
            「<?php v('はい'); ?>、
            <?php v('そうです'); ?>」
         </span>
         khi sai thì là
         <span class="text bold d-inline-block">
            「<?php v('いいえ'); ?>、
            <?php v('そうじゃありません'); ?>」
         </span>.<br />

         <span class="numbering circle">5</span>&#x3000;
         <?php v('それ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('テレホンカード'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Đó có phải là thẻ điện thoại không?<br />
         &#x3000;&#x3000;…
         <?php vb('はい'); ?>、
         <?php vb('そうです'); ?>。<br />
         &#x3000;&#x3000;…Vâng, phải.<br />

         <span class="numbering circle">6</span>&#x3000;
         <?php v('それ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('テレホンカード'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Đó có phải là thẻ điện thoại không?<br />
         &#x3000;&#x3000;…
         <?php vb('いいえ'); ?>、
         <?php vb('そうじゃありません'); ?>。<br />
         &#x3000;&#x3000;…Không, không phải.<br />

         Đôi lúc động từ
         <?php vb('ちがいます', true); ?>
         (sai, nhầm, không phải) được dùng với nghĩa tương đương với
         <?php vb('そうじゃありません', true); ?>.<br />

         <span class="numbering circle">7</span>&#x3000;
         <?php v('それ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('テレホンカード'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Đó có phải là thẻ điện thoại không?<br />

         &#x3000;&#x3000;…
         <?php v('いいえ'); ?>、
         <?php v('違います'); ?>。<br />
         &#x3000;&#x3000;…Không, không phải.
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">4.</span>
      Câu<sub>1</sub>&#x0020;
      <?php v('か'); ?>,
      Câu<sub>2</sub>&#x0020;
      <?php v('か'); ?>
   </div>

   <div class="segment">
      <div class="content">
         Mẫu câu nghi vấn này dùng để hỏi về sự lựa chọn của người nghe.
         Người nghe sẽ lựa chọn Câu<sub>1</sub>&#x0020;hoặc Câu<sub>2</sub>.
         Đối với câu nghi vấn loại này, khi trả lời không dùng
         <?php vb('はい', true); ?> hay
         <?php vb('いいえ', true); ?> mà để nguyên câu lựa chọn.<br />


         <span class="numbering circle">8</span>&#x3000;
         <?php v('これ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         「９」
         <?php v('です'); ?>&#x3000;
         <?php vb('か'); ?>。
         「７」
         <?php v('です'); ?>&#x3000;
         <?php vb('か'); ?>。<br />
         &#x3000;&#x3000;Đây là “9” hay “7”?<br />

         &#x3000;&#x3000;…「９」
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;…Đó là “9”.
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">5.</span>
      Danh từ<sub>1</sub>&#x0020;
      <?php v('の'); ?>&#x0020;
      Danh từ<sub>2</sub>
   </div>

   <div class="segment">
      Ở Bài 1, chúng ta đã học từ
      <?php vb('の', true); ?>
      dùng để nối hai danh từ khi Danh từ<sub>1</sub>&#x0020;bổ nghĩa cho Danh từ<sub>2</sub>.
      Ở bài này chúng ta sẽ học hai cách dùng khác của
      <?php vb('の', true); ?> .

      <div class="heading-2">
         <span class="numbering">1)</span>
         Danh từ<sub>1</sub>&#x0020;giải thích Danh từ<sub>2</sub>&#x0020;nói về cái gì.
      </div>

      <div class="content">
         <span class="numbering circle">9</span>&#x3000;
         <?php v('これ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('コンピューター'); ?>&#x3000;
         <?php vb('の'); ?>&#x3000;
         <?php v('本'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Đây là quyển sách về máy vi tính.<br />
      </div>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">2)</span>
         Danh từ<sub>1</sub>&#x0020;giải thích danh từ<sub>2</sub>&#x0020;thuộc sở hữu của ai.
      </div>

      <div class="content">
         <span class="numbering circle">10</span>&#x3000;
         <?php v('これ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('わたし'); ?>&#x3000;
         <?php vb('の'); ?>&#x3000;
         <?php v('本'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Đây là quyển sách của tôi.<br />

         Danh từ<sub>2</sub>&#x0020;thường được giản lược trong trường hợp đã rõ nghĩa.
         Tuy nhiên nếu Danh từ<sub>2</sub>&#x0020;là danh từ chỉ người thì không giản lược được.<br />

         <span class="numbering circle">11</span>&#x3000;
         <?php v('あれ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('だれ'); ?>&#x3000;
         <?php vb('の'); ?>&#x3000;
         <?php v('かばん'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Kia là cặp sách của ai?<br />

         &#x3000;&#x3000;…
         <?php v('佐藤'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php v('の'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;…Đó là cặp sách của chị Sato.<br />

         <span class="numbering circle">12</span>&#x3000;
         <?php v('この'); ?>&#x3000;
         <?php v('かばん'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('あなた'); ?>&#x3000;
         <?php vb('の'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Cái cặp sách này có phải là của chị?<br />

         &#x3000;&#x3000;…
         <?php v('いいえ'); ?>、
         <?php v('わたし'); ?>&#x3000;
         <?php v('の'); ?>&#x3000;
         <?php v('じゃありません'); ?>。<br />
         &#x3000;&#x3000;…Không, không phải là của tôi.<br />


         <span class="numbering circle">13</span>&#x3000;
         <?php v('ミラー'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         IMC&#x3000;
         <?php vb('の'); ?>&#x3000;
         <?php v('社員'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Anh Miller có phải là nhân viên của công ty IMC không?<br />

         &#x3000;&#x3000;…
         <?php v('はい'); ?>、
         IMC&#x3000;
         <?php v('の'); ?>&#x3000;
         <?php v('社員'); ?>。<br />
         &#x3000;&#x3000;…Vâng, anh ấy là nhân viên công ty IMC.<br />
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">6.</span>
      <?php v('そうですか'); ?>
   </div>

   <div class="segment">
      <div class="content">
         <?php vb('そうですか', true); ?>
         được dùng khi người nói tiếp nhận được thông tin mới nào đó và muốn bày thái độ tiếp nhận của mình đối với thông tin đó.<br />

         <span class="numbering circle">6</span>&#x3000;
         <?php v('この'); ?>&#x3000;
         <?php v('傘'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('あなた'); ?>&#x3000;
         <?php v('の'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Cái ô này có phải là của anh không?
         <br />

         &#x3000;&#x3000;…
         <?php v('いいえ'); ?>、
         <?php v('違います'); ?>。
         <?php v('シュミット'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php v('の'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Không, không phải. Của anh Schmidt.
         <br />

         &#x3000;&#x3000;…
         <?php vb('そうですか'); ?>。<br />
         &#x3000;&#x3000;Thế này.
         <br />

      </div>
   </div>
</div>

<?php if (BUILD_TYPE == BuildType::Normal): ?>
   <script>
      $(document).ready(function () {
         $('.u7ha1-chapter').u7ha1('initialize');
         $('.u7ha1-chapter').u7ha1('grammar');
      });
   </script>
<?php endif; ?>
