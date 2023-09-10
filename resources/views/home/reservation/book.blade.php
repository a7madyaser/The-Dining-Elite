
@extends('home.navbar')
@extends('home.footer')
@section('contentnav')
@endsection
<body>


  <main id="main">
<br>
<br>
<br>
<br>

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="{{ url('/reservation') }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
             @csrf
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                <input name="date" class="form-control" id="date" placeholder="Date" type="datetime-local" min="2023-09-01T00:00" max="9999-12-31T23:59">
                <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                <select class="form-control" name="restaurant" id="restaurant">
                    <option value=""> Restaurant</option>
                    @foreach($restaurants as $restaurant)
                     <option> {{ $restaurant->name }}</option>
    <!-- إضافة المزيد من المعلومات عن المطعم حسب الحاجة -->
@endforeach


                </select>
                <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" value="Save">Book a Table</button></div>

        </form>

      </div>
    </section><!-- End Book A Table Section -->







  </main><!-- End #main -->
{{--
 @section('contentfooter')
 @endsection; --}}

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const dateInput = document.getElementById("date");

        // يتم تنفيذ هذه الوظيفة عندما يتم فقد الفوكس عن حقل النص
        dateInput.addEventListener("blur", function() {
            // الحصول على قيمة التاريخ من الحقل النصي
            const dateValue = dateInput.value;

            // إذا كان التاريخ غير فارغ
            if (dateValue.trim() !== "") {
                // تحويل التاريخ إلى كائن تاريخ Date
                const inputDate = new Date(dateValue);

                // تاريخ اليوم
                const today = new Date();

                // قارن بين التاريخ المدخل وتاريخ اليوم
                if (inputDate < today+1) {
                    // إذا كان التاريخ أقدم من اليوم، عرض رسالة خطأ
                    alert("لا يمكنك اختيار تاريخ قديم.");
                    // قم بمسح محتوى الحقل النصي
                    dateInput.value = "";
                }
            }
        });
    });
    </script>






</body>

</html>
