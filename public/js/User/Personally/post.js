$(document).ready(function () {
    let page = 0;

    getPost();

    var token = $("input[name='_token']").val();

    // lấy ra các bài đăng tuyển
    function getPost() {
        let currentUrl = location.href.split('/')[2];

        let search_keywords = $('.keyword-search').val();
        let search_address = $('.selected-address').val();
        let sort_date = $('.sort-date').val();
        let sort_salary = $('.sort-salary').val();
        let typework = getValueCheckbox('typework');
        let experiences_from = $('.experiences:checked').val();
        let experiences_to = $('.experiences:checked').attr("data-to");
        let categories = getValueCheckbox('categories');
        let field_career = getValueCheckbox('field_career');

        $.ajax({
            type: 'GET',
            url: 'http://' + currentUrl + "/posts/createPost",
            dataType: 'json',
            data: {
                search_keywords: search_keywords,
                search_address: search_address,
                sort_date: sort_date,
                sort_salary: sort_salary,
                typework: typework,
                experiences_from: experiences_from,
                experiences_to: experiences_to,
                categories: categories,
                field_career: field_career,
                page: page
            },
            success: function (response) {
                let posts = response[0];
                // chuyển object article thành mảng để dùng hàm includes (tìm 1 số có trong mảng)
                let interests = [];
                response[1].forEach(e => {
                    interests.push(e.id_article);
                });

                let htmlPost = '';

                posts.forEach(element => {
                    htmlPost += `<a href = "" class = "nav-item d-flex nav-item__post position-relative posts-item">
                                    <div href="" class="nav-item__image post-item--image">
                                        <img src = ` + element.logo + ` alt = "">
                                    </div>
                                    <div class = "nav-item__content d-flex justify-content-between position-relative">
                                        <div class="nav-item__content--left">
                                            <p class="h4"> ` + element.title + ` </p>
                                            <p class="h6"> ` + element.name + ` </p>
                                            <p class="salary">
                                                <i class = "fa-solid fa-dollar-sign"></i> Lương :
                                                <span class = "salary-content" > ` + changedPrice(element.salary_from) + ` - ` + changedPrice(element.salary_to) + `</span>
                                            </p>
                                            <p class="address">
                                                <i class = "fa-solid fa-location-dot"></i> ` + element.address_work + `
                                            </p>
                                            <p class="typework">
                                                <i class = "fa-solid fa-location-dot"></i> ` + element.name_Tyework + ` <span class='experiences'>(Kinh nghiệm: ` + element.experience + ` năm)</span>
                                            </p>
                                            <p class="date-at"><i class="fa-solid fa-clock">
                                                </i> Đăng ngày ` + element.created_at + ` Cập nhật ngày ` + element.updated_at + `
                                            </p>
                                        </div>
                                    </div>`;

                    if (interests.includes(element.id)) {
                        htmlPost += `<i class="fa-solid fa-bookmark icon-interested icon-interested--save post-item--save top-0" data-id=` + element.id + `></i>`;
                    } else {
                        htmlPost += `<i class="fa-solid fa-bookmark icon-interested icon-interested--unsave post-item--save top-0" data-id=` + element.id + `></i>`;
                    } htmlPost += `</a>`;
                });

                $('.posts-items__container').html(htmlPost);

                // Tổng việc làm
                let totalWorks = response[2].total;
                $('.total-works').html(totalWorks);

                let addressWork = $('.selected-address option:selected').text();
                $('.address-work').html(addressWork);

                // tạo phân trang
                let paginate = response[2].links;
                let lengthPaginate = Object.keys(paginate).length;
                let htmlPagination = ``;

                if (lengthPaginate > 2) {
                    if (page > 0 && page < lengthPaginate - 2) {
                        htmlPagination += `<li class='page-item disabled page-previous'>
                                            <span class='page-link'>‹</span>
                                        </li>`;
                    }

                    htmlPagination += `<li class='page-item current-page' data-page=` + 0 + `><a class='page-link' >` + 0 + `</a></li>`;
                    let i = 0;

                    for (i = 1; i < lengthPaginate - 2; i++) {
                        if (page < 6) {
                            if (i < 6) {
                                htmlPagination += `<li class='page-item current-page' data-page=` + paginate[i].label + `><a class='page-link' >` + paginate[i].label + `</a></li>`;
                            } else if (i === 6) {
                                htmlPagination += `<li class='page-item current-page--more'><a class='page-link' >...</a></li>`;
                            } else if ((lengthPaginate - 2) - i <= 1) {
                                htmlPagination += `<li class='page-item current-page last-page' data-page=` + paginate[i].label + `><a class='page-link' >` + paginate[i].label + `</a></li>`;
                            }
                        } else {
                            if (i < 6) {
                                htmlPagination += `<li class='page-item current-page' data-page=` + paginate[i + (page - 5)].label + `><a class='page-link' >` + paginate[i + (page - 5)].label + `</a></li>`;
                            } else if (i === 6 && (lengthPaginate - 2) - page > 2) {
                                htmlPagination += `<li class='page-item current-page--more'><a class='page-link' >...</a></li>`;

                            } else {
                                if ((lengthPaginate - 2) - i <= 1 && (lengthPaginate - 2) - page > 1) {
                                    htmlPagination += `<li class='page-item current-page last-page' data-page=` + paginate[i].label + `><a class='page-link'>` + paginate[i].label + `</a></li>`;
                                }
                            }
                        }
                    }

                    if (page < lengthPaginate - 3 && page >= 0) {
                        htmlPagination += `<li class='page-item disabled page-next'>
                                            <span class='page-link'>›</span>
                                        </li>`;
                    }
                }

                $('.pagination--container').html(htmlPagination);

                $('.page-previous').click(function () {
                    if (page > 0) {
                        page--;
                        getPost();
                    }
                })

                $('.page-next').click(function () {
                    if (page < lengthPaginate - 3) {
                        page++;
                        getPost();
                    }
                })

                // thay đổi trạng thái trang hiện tại
                activePaginations();

                // click vào trang
                $('.current-page').click(function () {
                    page = $(this).attr('data-page');
                    getPost();
                })

                // Lưu bài tuyển dụng quan tâm
                $('.icon-interested--unsave').click(function (e) {
                    e.preventDefault();

                    let id = $(this).attr("data-id");
                    let currentUrl = location.href.split('/')[2];

                    $.ajax({
                        url: 'http://' + currentUrl + '/posts/post-saved',
                        type: "POST",
                        data: {
                            id: id,
                            _token: token
                        },
                        success: function () {
                            getPost();
                        }
                    })
                })

                // hủy lưu bài tuyển dụng
                $('.icon-interested--save').click(function (e) {
                    e.preventDefault();
                    let id = $(this).attr("data-id");
                    let currentUrl = location.href.split('/')[2];

                    $.ajax({
                        url: 'http://' + currentUrl + '/posts/post-unsaved',
                        type: "delete",
                        data: {
                            id: id,
                            _token: token
                        },
                        success: function () {
                            getPost();
                        }
                    })
                })
            },
            error: function (error) {}
        })

    }

    $('.post-search').submit(function (e) {
        e.preventDefault();
        page = 0;
        getPost();
    })

    $('.sort-date').on('change', function () {
        page = 0;
        getPost();
    })

    $('.selected-address').on('change', function () {
        page = 0;
        getPost();
    })

    $('.keyword-search').on('keyup', function () {
        page = 0;
        getPost();
    })

    $('.sort-salary').on('change', function () {
        page = 0;
        getPost();
    })

    $('.typework').on("change", function () {
        page = 0;
        getPost();
    })

    $('.experiences').on("change", function () {
        page = 0;
        getPost();
    })

    $('.categories').on("change", function () {
        page = 0;
        getPost();
    })

    $('.field_career').on("change", function () {
        page = 0;
        getPost();
    })

    // reset lọc việc làm
    $('.reset-research').click(function () {
        $('.sort-date')[0].selectedIndex = 0;
        $('.sort-salary')[0].selectedIndex = 0;
        $('.selected-address')[0].selectedIndex = 0;
        $('input[type=checkbox]').prop('checked', false);
        $('input[type=radio]').prop('checked', false);
        $('.keyword-search').val('');
        getPost();
    })


    // sổ mục lục ngành nghề
    $('.more-careers').click(function () {
        let career_id = $(this).attr("data-id");
        let fields_career = document.querySelectorAll('.fields_career');

        if ($(this).hasClass('fa-minus')) {
            $(this).addClass('fa-plus').removeClass('fa-minus');

            fields_career.forEach(e => {
                e.getAttribute('data-id') === career_id ? e.style.display = "none" : null;
            })
        } else {
            $(this).addClass('fa-minus').removeClass('fa-plus');

            fields_career.forEach(e => {
                e.getAttribute('data-id') === career_id ? e.style.display = "grid" : null;
            })
        }
    })

    // set active cho pagination
    function activePaginations() {
        let paginations = document.querySelectorAll('.page-item');

        paginations.forEach(e => {
            if (e.getAttribute('data-page') == page) {
                e.classList.toggle('active')
            }
        })
    }

    // lấy giá trị của checkbox
    function getValueCheckbox(className) {
        let fill = [];
        $('.' + className + ":checked").each(function () {
            fill.push($(this).val());
        })

        return fill;
    }

    // định giá tiền tệ VNĐ
    function changedPrice(price) {
        var priceChanged = price.toLocaleString("vi-VN", {
            style: "currency",
            currency: "VND"
        });

        return priceChanged;
    }
})
