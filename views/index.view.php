<?php require 'partials/header.php'; ?>
   <div class="container-fluid">
      <div class="row">
         <!-- Slideshow container -->
         <div style="padding:30px; padding-top:20px" class="slideshow-container-fluid">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
               <div class="numbertext">1 / 3</div>
               <a href="/place"><img src="../libs/images/place.jpg" style="height:500px; width:100%"></a>
               <div style="color:blue;font-size: 50px" class="text">ĐỊA ĐIỂM THAM QUAN</div>
            </div>

            <div class="mySlides fade">
               <div class="numbertext">2 / 3</div>
               <a href="/food"><img src="../libs/images/food.jpg" style="width:100%; height:500px"></a>
               <div style="color:blue;font-size: 50px" class="text">ẨM THỰC</div>
            </div>

            <div class="mySlides fade">
               <div class="numbertext">3 / 3</div>
               <a href="/gift"><img src="../libs/images/gift2.jpg" style="width:100%; height: 500px"></a>
               <div style="color:blue;font-size: 50px" class="text">QUÀ LƯU NIỆM</div>
            </div>
         </div>
      </div>
   </div>
   <!-- Next and previous buttons -->
   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
   <span class="dot" onclick="currentSlide(1)"></span>
   <span class="dot" onclick="currentSlide(2)"></span>
   <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>
</div>
<script>
   var slideIndex = 0;
   showSlides();

   function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
         slideIndex = 1
      }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
   }
</script>
<div style=" padding-top:30px"class="container">
<h2>Đánh Giá Của Người Đọc</h2>
<div class="row">
<div  class="col-sm-3">
<div style="background-color: pink" class="media border p-3">
  <img src="./libs/images/minhhang.jpg" alt="Ngọc Bích" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>Ngọc Bích <small><i>Đăng ngày 19/12/2019</i></small></h4>
    <p>Các bài viết của trang hay và hữu ích lắm ạ.....Loveeeeee!!!!!!!!</p>
  </div>
</div>
</div>
<div  class="col-sm-3">
<div style="background-color: pink" class="media border p-3">
  <img src="./libs/images/girl.jpg" alt="Ngọc Bích" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>Minh Hằng <small><i>Đăng ngày 25/1/2020</i></small></h4>
    <p>Khám Phá Huế đã mang đến cho tôi những thông tin du lịch Huế hữu ích</p>
  </div>
</div>
</div>
<div  class="col-sm-3">
<div style="background-color: pink" class="media border p-3">
  <img src="./libs/images/boy.jpg" alt="Ngọc Bích" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>Khánh <small><i>Đăng ngày 25/12/2019</i></small></h4>
    <p style="height:120px">Hay lắm.....Loveeeeee!!!!!!!!</p>
  </div>
</div>
</div>
<div  class="col-sm-3">
<div style="background-color: pink" class="media border p-3">
  <img src="./libs/images/boy1.jpg" alt="Ngọc Bích" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4>Minh Trí <small><i>Đăng ngày 19/12/2019</i></small></h4>
    <p style="height:120px"> Nội Dung Tuyệt Vời.....Loveeeeee!!!!!!!!</p>
  </div>
</div>
</div>
</div>
</div>
<div class="container">
   <div class="row">
      <h1 style="text-align:center">Chào Mừng bạn đến với Khám phá Huế-Trang thông tin về du lịch Huế</h1>
      <p>Từng là Kinh đô của triều đại nhà Nguyễn, chính vì thế mà Huế được xem là một trong những thành phố có bề dày lịch sử, văn hóa lâu đời nhất ở nước ta. Không chỉ là văn hóa di tích mà Huế còn quyến rũ du khách bởi
         những cảnh quan thiên nhiên hữu tình thi vị và con người chân chất hiền hòa.</p>
      <br>
      <p>Ngày nay, Huế được biết đến là thành phố Festival của Việt Nam. Festival Huế lần đầu được tổ chức vào năm 2000, với sự thành công ngoài mong đợi Thành phố Huế đã quyết định 2 năm sẽ tổ chức Festival 1 lần.
         Huế ngoài nổi tiếng với núi Ngự hùng vĩ soi bóng bên dòng sông Hương thơ mộng nên thơ và các di tích cổ xưa của các triều đại vua chúa thì Huế còn được biết đến với nhiều bãi biển đẹp cho những ai thích du lịch.
         Huế còn là địa điểm du lịch lý tưởng không thể bỏ qua đối với những ai yêu thích tìm hiểu, khám phá những di tích lịch sử, văn hóa của Việt Nam.</p>
      <br>
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/K1ie-Vgss-Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <br>
      <p>
         Ngày này các tour du lịch đến Huế ngày một tăng lên bởi lẽ Thành phố Huế luôn giữ cho mình nét văn hóa riêng và bảo tổn những di tích lăng tẩm, đền đền của các vị vua chúa không bị mai một.Người ta biến đến Huế là vùng đất của những lễ hội dân gian tiêu biểu như: lễ hội Huế Nam ở điện Hòn Chén theo tín ngưỡng của người Chăm pa, lễ hội tưởng nhớ các vị khai canh thành lập làng, lễ hội tưởng niệm các vị khai sinh các ngành nghề truyền thống…
         Trong những dịp lễ này, nhiều hoạt động sinh hoạt cộng đồng bổ ích vẫn được duy trì tổ chức như đua thuyền, kéo co, đấu vật… thu hút rất đông người xem hàng năm.
      </p>
      <br>
      <p>
         Với di sản văn hoá thế giới, cảnh quan thiên nhiên, nhiều di tích lịch sử, các sản phẩm đặc sản, nhất là nhà vườn là một nét độc đáo tiêu biểu của thành phố Huế như: nhà vườn An Hiên, Lạc Tịnh Viên, nhà vườn Ngọc Sơn Công Chúa, Tỳ Bà Trang, Tịnh Gia Viên… cùng với hệ thống khách sạn, nhà hàng, các dịch vụ phục vụ khác, thành phố đã và đang trở thành một trung tâm du lịch rất hấp dẫn khách du lịch đến Huế.
      </p>
   </div>
</div>



<?php require 'partials/footer.php'; ?>