<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between"> <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="{{ config('app.url', 'www.brac.net') }}" target="_blank">BRAC</a>. All rights reserved.</span> </div>
</footer>

<script>
    $(document).ready(function(){
        setInterval(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                url: "{{ route('notifications.newArchives') }}",
                data: {},
                success: function(data) {
                    console.log(data.studyArchives);
                    var studyCount =  data.studyArchives;
                    var totalCount =  studyCount;

                    if(totalCount == 0){
                        $('.head-count').hide();
                    }else{
                        $('.head-count').show();
                    }

                    $('.study-count').html(studyCount);
                    $('.total-count').html(totalCount);
                }
            });
        },3000);
    });

</script>
