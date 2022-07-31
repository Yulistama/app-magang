@section('css')
<style>

.card-content-custome{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    /* margin: 10px; */
}

.card-custome{
    position: relative;
    background: #fff;
    max-width: 300px;
    width: 300px;
    height: auto;
    margin: 10px;
    box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
    border-radius: 10px;
    overflow: hidden;
}

.card-image-custome{
    max-height: 200px;
    display: contents;
}

.card-image-custome img{
    max-width: 100%;
    height: auto;
}

.card-info-custome{
    position: relative;
    color: #222;
    padding: 10px 20px 20px;
}

.card-info-custome h3{
    font-size: 1.8em;
    font-weight: 800;
    margin-bottom: 5px;
}

.card-info-custome p{
    font-size: 1em;
    margin-bottom: 5px;
}

.pagination-custome{
    text-align: center;
    user-select: none;
    display: inline;
}

.pagination-custome li{
    display: inline-block;
    margin: 5px;
    box-shadow: 0 5px 25px rgb(1 1 1 / 10%);
}

.pagination-custome li a{
    color: #fff;
    text-decoration: none;
    font-size: 1.2em;
    line-height: 45px;
}

.previous-page-custome, .next-page-custome{
    background: #0ab1ce;
    width: 80px;
    border-radius: 45px;
    cursor: pointer;
    transition: 0.3s ease;
}

.previous-page-custome:hover{
    transform: translateX(-5px);
}

.next-page-custome:hover{
    transform: translateX(5px);
}

.current-page-custome, .dots{
    background: #ccc;
    width: 45px;
    border-radius: 50%;
    cursor: pointer;
}

.actived{
    background: #47b2e4;
}

.disabled{
    background: #ccc;
}

</style>
@endsection

    <div class="row py-4 shadow rounded">
        <div class="col-md-6 col-12 text-md-start text-center pt-3">
            <span>Cari Magang</span>
            <div class="dropdown d-inline">
                <button class="btn btn-info dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Semua Kota
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Jakarta</a>
                    <a class="dropdown-item" href="#">Bandung</a>
                    <a class="dropdown-item" href="#">Yogyakarta</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 text-md-end text-center"> 
            <a style="text-decoration: none;" href="<?php echo e(route('infomagangdetail')); ?>">
                <button type="button" class="btn btn-outline-info mx-4">Lihat semua</button>
            </a>
            <div class="pagination-custome"></div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="card-content-custome" style="display: 'none';">

            @foreach($perusahaan as $item)
                <div class="card-custome">
                    <a style="text-decoration: none;" href="<?php echo e(route('detailperusahaan', ['id' => $item->id_perusahaan])); ?>">
                        <div class="card-image-custome">
                            <img src="{{ $item->image }}" style="height: 200px; width: 100%" alt="">
                        </div>
                        <div class="card-info-custome">
                            <h5>{{$item->name}}</h5>
                            <p>{{$item->name}} adalah {{$item->about}}.</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        function getPageList(totalPages, page, maxLength){
            function range(start, end){
                return Array.from(Array(end - start + 1), (_, i) => i + start);
            }

            var sideWidth = maxLength < 9 ? 1 :2;
            var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
            var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

            if(totalPages <= maxLength){
                return range(1, totalPages);
            }

            if(page <= maxLength - sideWidth - 1 - rightWidth){
                return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
            }

            if(page >= totalPages - sideWidth - 1 - rightWidth){
                return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
            }

            return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth));
        }

        $(document).ready(function(){
            var numberOfItems = $(".card-content-custome .card-custome").length;
            var limitPerPage = 4;
            var totalPages = Math.ceil(numberOfItems / limitPerPage);
            var paginationSize = 7;
            var currentPage;

            function showPage(whichPage){
                if(whichPage < 1 || whichPage > totalPages) return false;

                currentPage = whichPage;

                $(".card-content-custome .card-custome").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

                $(".pagination-custome li").slice(1, -1).remove();

                getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                    // $("<li>").addClass("page-item-custome").addClass(item ? "current-page-custome" : "dots")
                    // .toggleClass("actived", item === currentPage).append($("<a>").addClass("page-link-custome")
                    // .attr({href : "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page-custome");
                });

                $(".previous-page-custome").toggleClass("disabled", currentPage === 1);
                $(".next-page-custome").toggleClass("disabled", currentPage === totalPages);
                
                return true;
            }

            $(".pagination-custome").append(
                $("<li>").addClass("page-item-custome").addClass("previous-page-custome").append($("<a>").addClass("page-link-custome").attr({href: "javascript:void(0)"}).text("<")),
                $("<li>").addClass("page-item-custome").addClass("next-page-custome").append($("<a>").addClass("page-link-custome").attr({href: "javascript:void(0)"}).text(">"))
            );

            $(".card-content-custome").show();
            showPage(1);

            $(document).on("click", ".pagination-custome li.current-page-custome:not(.actived)", function(){
                return showPage(+$(this).text());
            });

            $(".next-page-custome").on("click", function(){
                return showPage(currentPage + 1);
            })

            $(".previous-page-custome").on("click", function(){
                return showPage(currentPage - 1);
            })
           
        });
    </script>
@endsection