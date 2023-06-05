@extends('frontend.app')
@section('title')
order success
@endsection
@section('content')
<!--header -->
<x-header :categoriers="$categoriers" :count="$count"></x-header>

<!-- Shop Details Section Begin -->
<section class="shop-details h-100 text-center d-flex align-items-center justify-content-center" >
    <div class="product__details__content">
        <div class="container">
                <div class="card">
                    <div class="card-header">Order Success</div>
                    <div class="card-body">
                        date : 
                    </div>
                </div>

                        
        </div>
    </div>


</section>
<!-- Shop Details Section End -->



@endsection

@section('scripts')
<script>

    $(document).ready(function(){
        function fetch_colors(item) {

color_check.forEach(row => {
    if (item !== row) {
        row.children[0].removeAttribute('checked')
        row.classList.remove('opacity')
    }

})

}
var color_check = document.querySelectorAll(".color-check");

var prod_id = document.querySelector('#prd_id').getAttribute('prd_id');
if (prod_id) {
function ajax_req(color) {
    var color = color
    if (color != 'all') {
        $.ajax({
            url: '../fetch-color/' + prod_id + '/' + color,
            dataType: 'json',
            success: function(data) {
                var current_labels = $('.product__details__option__size label');
                var size_checks = $('.size-check');
                $.each(size_checks, (key, value) => {
                    $(value).removeClass('active')
                })
                $.each(current_labels, (key, value) => {
                    $(value).addClass('d-none')
                })

                $.each(current_labels, (key, value) => {

                    $.each(data.sizes, (key, j) => {
                        if (j.id == $(value).attr('size_id')) {
                            $(value).removeClass('d-none')
                        }
                    })
                })
                $('#available-qte').empty().html(data.availability)

            },
            error: function(err) {
                console.log(err)
            }
        })
    } else {
        $.ajax({
            url: '../all-sizes' + '/' + prod_id,
            dataType: 'json',
            success: function(data) {
                var size_checks = $('.size-check');
                $.each(size_checks, (key, value) => {
                    $(value).removeClass('active')
                })
                $('#available-qte').empty().html(data.availability)
                var current_labels = $('.product__details__option__size label');
                $.each(current_labels, (key, value) => {
                    $(value).removeClass('d-none')
                })
            },
            error: function(err) {
                console.log(err)
            }
        })
    }


}


color_check.forEach(item => {

    item.addEventListener('click', function() {
        var color = null
        var filter = false
        if (item.children[0].hasAttribute('checked')) {
            ajax_req('all')
            item.classList.remove('opacity');
            item.children[0].removeAttribute('checked')
            filter = true
        } else {
            var color = item.getAttribute('color')
            item.classList.add('opacity')
            item.children[0].setAttribute('checked', '')
            ajax_req(color)
        }
        if (filter == false) {
            fetch_colors(item)
        }
    })


})



}
    })
</script>

@endsection