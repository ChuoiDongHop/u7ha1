<?php require_once 'helper/tag_helper.php'; ?>

<div class="container">
   <div class="main-title">
      <?php echo $title ?>
   </div>

   <div class="heading-1">
      <span class="numbering">1.</span>
      <?php v('ここ'); ?>／
      <?php v('そこ'); ?>／
      <?php v('あそこ'); ?>／
      <?php v('こちら'); ?>／
      <?php v('そちら'); ?>／
      <?php v('あちら'); ?>
   </div>

   <div class="segment">
      <div class="content">
         Ở Bài 2 chúng ta đã học về các đại từ chỉ đồ vật
         <span class="text bold d-inline-block">
            「
            <?php v('これ'); ?>／
            <?php v('それ'); ?>／
            <?php v('あれ'); ?>
            」
         </span>.
         Trong bài này chúng ta sẽ học về các đại từ chỉ địa điểm
         <span class="text bold d-inline-block">
            「
            <?php v('ここ'); ?>／
            <?php v('そこ'); ?>／
            <?php v('あそこ'); ?>
            」
         </span>.<br />

         <?php vb('ここ', true); ?>
         chỉ vị trí mà người nói đang ở.<br />
         <?php vb('そこ', true); ?>
         chỉ vị trí mà người nghe đang ở.<br />
         <?php vb('あそこ', true); ?>
         chỉ vị trí ở xa cả người nói và người nghe.<br />
         <span class="text bold d-inline-block">
            「
            <?php v('こちら'); ?>／
            <?php v('そちら'); ?>／
            <?php v('あちら'); ?>
            」
         </span>
         là những đại từ chỉ phương hướng, nhưng có thể dùng thay thế
         <span class="text bold d-inline-block">
            「
            <?php v('ここ'); ?>／
            <?php v('そこ'); ?>／
            <?php v('あそこ'); ?>
            」
         </span>
         với sắc thái lịch sự hơn.<br />

         <span class="text bold d-inline-block">[Chú ý]</span>&#x0020;
         Khi người nói cho rằng người nghe cũng ở trong phạm vi vị trí của mình thì dùng
         <?php vb('ここ', true); ?>
         để chỉ vị trí của cả hai, dùng
         <?php vb('そこ', true); ?>
         để chỉ vị trí xa hơn hai người, dùng
         <?php vb('あそこ', true); ?>
         để chỉ vị trí tương đối xa hai người.<br /><br />
         <div class="text-center">
            <img src="<?php echo HOST; ?>/imgs/chapter_3/img_0.png">
         </div>
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">2.</span>
      Danh từ<sub>1</sub>&#x0020;
      <?php v('は2'); ?>&#x0020;
      Danh từ<sub>2</sub>&#x0020;(địa điểm)&#x0020;
      <?php v('です'); ?>
   </div>

   <div class="segment">
      <div class="content">
         Mẫu câu này được dùng để diễn đạt một vật, một người hay một địa điểm nào đó ở đâu.<br />

         <span class="numbering circle">1</span>&#x3000;
         <?php v('お手洗い'); ?>&#x3000;
         <?php vb('は'); ?>&#x3000;
         <?php v('あそこ'); ?>
         <?php vb('です'); ?>。<br />
         &#x3000;&#x3000;Nhà vệ sinh ở đằng kia.<br />

         <span class="numbering circle">2</span>&#x3000;
         <?php v('電話'); ?>&#x3000;
         <?php vb('は'); ?>&#x3000;
         <?php v('階'); ?>
         <?php vb('です'); ?>。<br />
         &#x3000;&#x3000;Điện thoại ở tầng hai.<br />

         <span class="numbering circle">3</span>&#x3000;
         <?php v('山田'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php vb('は'); ?>&#x3000;
         <?php v('事務所'); ?>&#x3000;
         <?php vb('です'); ?>。<br />
         &#x3000;&#x3000;Anh Yamada ở văn phòng.<br />
      </div>
   </div>


   <div class="heading-1">
      <span class="numbering">3.</span>
      <?php v('どこ'); ?>／
      <?php v('どちら'); ?>
   </div>

   <div class="segment">
      <div class="content">
         <?php vb('どこ', true); ?>
         là nghi vấn từ hỏi về địa điểm, còn　
         <?php vb('どちら', true); ?>
         là nghi vấn từ hỏi về phương hướng.
         Tuy nhiên
         <?php vb('どちら', true); ?>
         cũng có thể được dùng để hỏi về địa điểm.
         Trong trường hợp này thì　
         <?php vb('どちら', true); ?>
         mang sắc thái lịch sự hơn
         <?php vb('どこ', true); ?>.
      </div>
   </div>

</div>

<script type="text/javascript">
   $(document).ready(function () {
      $('.uh7a1-chapter').uh7a1('grammar');
   });
</script>
