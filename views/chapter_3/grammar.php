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
         <?php vb('は2'); ?>&#x3000;
         <?php v('あそこ'); ?>
         <?php vb('です'); ?>。<br />
         &#x3000;&#x3000;Nhà vệ sinh ở đằng kia.<br />

         <span class="numbering circle">2</span>&#x3000;
         <?php v('電話'); ?>&#x3000;
         <?php vb('は2'); ?>&#x3000;
         <?php v('階'); ?>&#x3000;
         <?php vb('です'); ?>。<br />
         &#x3000;&#x3000;Điện thoại ở tầng hai.<br />

         <span class="numbering circle">3</span>&#x3000;
         <?php v('山田'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php vb('は2'); ?>&#x3000;
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
         <?php vb('どこ', true); ?>.<br />

         <span class="numbering circle">4</span>&#x3000;
         <?php v('お手洗い'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php vb('どこ'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Nhà vệ sinh ở đâu?<br />

         &#x3000;&#x3000;
         <?php v('あそこ'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Ở chỗ kia.<br />

         <span class="numbering circle">5</span>&#x3000;
         <?php v('エレベーター'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php vb('どちら'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Thang máy ở chỗ nào ạ?<br />

         &#x3000;&#x3000;
         <?php v('あちら'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Ở chỗ kia ạ.<br />

         Ngoài ra khi hỏi về tên của quốc gia, công ty, trường học, cơ quan
         hay tổ chức trực thuộc thì cũng dùng nghi vấn từ
         <?php vb('どこ', true); ?>
         hay
         <?php vb('どちら', true); ?>
         chứ không phải là
         <span class="text bold d-inline-block">
            「<?php v('なん'); ?>(gì)」
         </span>.
         Trong trường này cũng thể
         <?php vb('どちら', true); ?>
         mang sắc thái lịch sự hơn　
         <?php vb('どこ', true); ?>.<br />

         <span class="numbering circle">6</span>&#x3000;
         <?php v('学校'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php vb('どこ'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Anh học ở trường nào?<br />

         <span class="numbering circle">7</span>&#x3000;
         <?php v('会社'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php vb('どちら'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Chị làm việc ở công ty nào ạ?<br />


      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">4</span>
      Danh từ<sub>1</sub>&#x0020;
      <?php v('の'); ?>&#x0020;
      Danh từ<sub>2</sub>
   </div>

   <div class="segment">
      <div class="content">
         Trong mẫu câu này Danh từ<sub>1</sub>&#x0020;là tên quốc gia hoặc công ty,
         còn Danh từ<sub>2</sub>&#x0020;là tên của sản phẩm.
         Mẫu này dùng để diễn đạt một sản phẩm nào đó được sản xuất ở một nước hoặc một công ty nào đó.
         Đối với mẫu này, khi hỏi dùng nghi vấn
         <?php vb('どこ'); ?>.<br />

         <span class="numbering circle">8</span>&#x3000;
         <?php v('これ'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php vb('どこ'); ?>&#x3000;
         <?php vb('の'); ?>&#x3000;
         <?php v('コンピューター'); ?>&#x3000;
         <?php v('です'); ?>
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Đây là máy tinh của hãng nào?<br />

         &#x3000;&#x3000;…
         <?php v('日本'); ?>&#x3000;
         <?php vb('の'); ?>&#x3000;
         <?php v('コンピューター'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Đây là máy vi tinh của Nhật Bản<br />

         &#x3000;&#x3000;…
         IMC&#x3000;
         <?php vb('の'); ?>&#x3000;
         <?php v('コンピューター'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Đây là máy vi tinh của Công ty IMC<br />
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">5.</span>
      Bảng đại từ chỉ thị&#x0020;
      <?php v('こ'); ?>／
      <?php v('そ'); ?>／
      <?php v('あ'); ?>／
      <?php v('ど'); ?>&#x0020;
      và tính từ chỉ thị tương ứng
   </div>

   <div class="segment">
      <div class="content">
         <style scoped>
            .col-sm{
               border: 1px solid #000;
               border-collapse: collapse;
               text-align: left;
               padding: 0.5em;
            }
         </style>

         <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
               nhóm <?php vb('こ', true); ?>
            </div>
            <div class="col-sm">
               nhóm <?php vb('そ', true); ?>
            </div>
            <div class="col-sm">
               nhóm <?php vb('あ', true); ?>
            </div>
            <div class="col-sm">
               nhóm <?php vb('ど', true); ?>
            </div>
         </div>

         <div class="row">
            <div class="col-sm">
               đồ vật
            </div>
            <div class="col-sm">
               <?php v('これ', true); ?>
            </div>
            <div class="col-sm">
               <?php v('それ', true); ?>
            </div>
            <div class="col-sm">
               <?php v('あれ', true); ?>
            </div>
            <div class="col-sm">
               <?php v('どれ', true); ?>（Bài 8)
            </div>
         </div>

         <div class="row">
            <div class="col-sm">
               đồ vật<br />
               người
            </div>
            <div class="col-sm">
               <?php v('この', true); ?>&#x0020;danh từ
            </div>
            <div class="col-sm">
               <?php v('その', true); ?>&#x0020;danh từ
            </div>
            <div class="col-sm">
               <?php v('あの', true); ?>&#x0020;danh từ
            </div>
            <div class="col-sm">
               <?php v('どの', true); ?>&#x0020;danh từ（Bài 16)
            </div>
         </div>

         <div class="row">
            <div class="col-sm">
               địa điểm
            </div>
            <div class="col-sm">
               <?php v('ここ', true); ?>
            </div>
            <div class="col-sm">
               <?php v('そこ', true); ?>
            </div>
            <div class="col-sm">
               <?php v('あそこ', true); ?>
            </div>
            <div class="col-sm">
               <?php v('どこ', true); ?>
            </div>
         </div>

         <div class="row">
            <div class="col-sm">
               phương hướng<br />
               địa điểm (lịch sự)
            </div>
            <div class="col-sm">
               <?php v('こちら', true); ?>
            </div>
            <div class="col-sm">
               <?php v('そちら', true); ?>
            </div>
            <div class="col-sm">
               <?php v('あちら', true); ?>
            </div>
            <div class="col-sm">
               <?php v('どちら', true); ?>
            </div>
         </div>
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">6.</span>
      <?php v('お国'); ?>
   </div>

   <div class="segment">
      <div class="content">
         Tiền tốt
         <?php v('お', true); ?>
         được thêm vào trước một từ có liên quan đến người nghe hoặc người thứ ba để bày tỏ sự kính trọng của người nói.<br />

         <span class="numbering circle">9</span>&#x3000;
         <?php vb('お国'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('どちら'); ?>&#x3000;
         <?php v('です'); ?>&#x3000;
         <?php v('か'); ?>。<br />
         &#x3000;&#x3000;Anh/chị là người nước nào?<br />
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
