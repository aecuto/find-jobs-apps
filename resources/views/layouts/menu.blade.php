<div class="col-sm-4">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link" href="/search_job" id="search_job">ค้นหางาน</a>
        <a class="nav-link" href="/search_worker" id="search_worker">ค้นหาคนทำงาน</a>
        <a class="nav-link" href="/governmentJobs" id="governmentJobs">ตำแหน่งงานราชการ รัฐวิสาหกิจ</a>
        <a class="nav-link" href="/announcements" id="announcements">ข่าวประกาศ</a>
    </div>
</div>

<script>
  $(function() {

    $('#v-pills-tab').on('click', function (e) {
    //save the latest tab; use cookies if you like 'em better:
    localStorage.setItem('selectMenu', $(e.target).attr('id'));
    });

    //go to the latest tab, if it exists:
    var selectMenu = localStorage.getItem('selectMenu');
    if (selectMenu) {
      $('#'+selectMenu).addClass('active');
    }
  });
</script>