<footer>
  <div class="d-block py-60">
    <div class="container-lg">
      <div class="row gy-3">
        <div class="col-12">
          <div
          class="d-flex gap-3 align-items-center s-icons justify-content-center"
        >
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        </div>
        <div class="col-12 text-center">
          <p>
            &copy; copyright 2023. all rights reserved. Dr. Yannik Kashif
            Pitcan
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">
          Stats vs. ML
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="d-flex flex-column gap-2">
          <p>
            In the realm of data analysis, two disciplines often come to the
            forefront: Statistics and Machine Learning. While they share
            common ground, their approaches and applications diverge in
            fascinating ways. Statistics, a branch of mathematics, has been
            around for centuries. It focuses on making inferences from data.
            Statisticians often start with a hypothesis and use data to test
            this hypothesis. They are interested in understanding the
            underlying data distribution and the relationships between
            variables. The primary goal is inference, deriving insights and
            conclusions about the population from which the data was
            sampled. On the other hand, Machine Learning, a subset of
            artificial intelligence, is a relatively new field. It focuses
            on creating algorithms that improve their performance or make
            accurate predictions based on the data they process. Machine
            learning models often prioritize predictive accuracy over
            interpretability. The primary goal is prediction, using patterns
            in the data to forecast future outcomes, often without a deep
            understanding of the underlying causal relationships. While the
            two fields have different emphases, they are not mutually
            exclusive. In fact, they often overlap and complement each
            other. Many machine learning techniques are grounded in
            statistical theory, while statistics has evolved to incorporate
            machine learning methods. In essence, both statistics and
            machine learning provide valuable tools for understanding data.
            The choice between them depends on the problem at hand. If the
            goal is to understand underlying patterns and relationships in
            the data, statistics might be the way to go. If the goal is to
            make accurate predictions from complex datasets, machine
            learning could be a better choice. In many real-world scenarios,
            a blend of both disciplines often yields the best results.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function ($) {
  // Add smooth scrolling to all links
  $(".navbar-nav a").on("click", function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
      var hashVal = hash.replace("#", "");
      var header_height = $("header").outerHeight();
      var offset_val = parseFloat(header_height) + 50;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

      $("html, body").animate(
        {
          scrollTop: eval($("[data-id="+hashVal+"]").offset().top - offset_val)
        },
        1000,
        function () {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        }
      );
    } // End if
  });
});
</script>
<script>
jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
      $("header").addClass("sticky");
    } else {
      $("header").removeClass("sticky");
    }
  });
});
</script>
</body>
</html>