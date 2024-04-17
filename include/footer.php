<!-- alarm modal s-->
<div class="modal fade" id="alarmmodal" tabindex="-1" aria-labelledby="alarmmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="alarmmodalLabel">새로운 알림</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alarm_list">
                    <div class="list_box">
                        <ul>
                            <li>
                                <div class="txt">
                                    <div class="date">2023년 5월 21일</div>
                                    <div class="title">팽이하우스 101호 (이몽룡)</div>
                                </div>
                                <div class="label"><span class="badge text-bg-danger">미납</span>
                                </div>
                            </li>
                            <li>
                                <div class="txt">
                                    <div class="date">2023년 5월 31일</div>
                                    <div class="title">부가가치세 신고</div>
                                </div>
                                <div class="label"><span class="badge text-bg-warning">예정</span>
                                </div>
                            </li>
                            <li>
                                <div class="txt">
                                    <div class="date">2023년 5월 31일</div>
                                    <div class="title">미처리 임대관리 업무</div>
                                </div>
                                <div class="label"><span class="badge text-bg-primary">2건</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-primary-lightest border-0">
                <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal">닫기</button>
            </div>
        </div>
    </div>
</div>
<!-- alarm modal e-->
<!--퇴거 일정 알림 modal s-->
<div class="modal fade" id="schedule" tabindex="-1" aria-labelledby="scheduleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">퇴거 일정 알림</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                팽이하우스 303호 홍길동n월 m일 퇴거 예정입니다.
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        더 이상 보지않습니다.
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-md  btn-primary" onclick="location.href='join2.html'">확인</button>
            </div>
        </div>
    </div>
</div>
<!--퇴거 일정 알림 modal e-->
<!--등록 요청 modal s-->
<div class="modal fade" id="request" tabindex="-1" aria-labelledby="requestLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">임대계약서 등록 요청</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                등록되어 있는 임대계약 정보가 없습니다. 임대계약서를 등록하시겠습니까?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-md btn-secondary" onclick="location.href='index_null.html'">임대관리 둘러보기</button>
                <button type="button" class="btn btn-md  btn-primary" onclick="location.href='join2.html'">임대계약 등록</button>
            </div>
        </div>
    </div>
</div>
<!--등록 요청 modal e-->

<!--등록 진행 modal s-->
<div class="modal fade" id="progress" tabindex="-1" aria-labelledby="progressLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">임대계약 등록 진행 알림</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                임대계약서 등록이 진행 중입니다. 등록이 완료되면 메세지로 알려드립니다.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-md btn-secondary" onclick="location.href='index_null.html'">등록한 계약서 보기</button>
                <button type="button" class="btn btn-md  btn-primary" onclick="location.href='join2.html'">임대관리 이동</button>
            </div>
        </div>
    </div>
</div>
<!--등록 진행 modal e-->

</div>
<!--wrap e-->

<script>
    window.onload = function() {
        $('.loading').css('display', 'none') //로딩 객체 제거
        $('body').removeClass('scrollLock') //스크롤 락 제거
    }
</script>

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if (data.userSelectedType === 'R') {
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if (data.buildingName !== '' && data.apartment === 'Y') {
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if (extraAddr !== '') {
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    document.getElementById("sample6_extraAddress").value = extraAddr;

                } else {
                    document.getElementById("sample6_extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode').value = data.zonecode;
                document.getElementById("sample6_address").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("sample6_detailAddress").focus();
            }
        }).open();
    }
</script> 

<script>
    (function() {

        window.inputNumber = function(el) {

            var min = el.attr('min') || false;
            var max = el.attr('max') || false;

            var els = {};

            els.dec = el.prev();
            els.inc = el.next();

            el.each(function() {
                init($(this));
            });

            function init(el) {

                els.dec.on('click', decrement);
                els.inc.on('click', increment);

                function decrement() {
                    var value = el[0].value;
                    value--;
                    if (!min || value >= min) {
                        el[0].value = value;
                    }
                }

                function increment() {
                    var value = el[0].value;
                    value++;
                    if (!max || value <= max) {
                        el[0].value = value++;
                    }
                }
            }
        }
    })();

    inputNumber($('.input-number'));
</script> 

<script>
    $(function() {
        $("#popupModal").modal("show");
    });
</script>

<script type="text/javascript">
    function comma(str) {
        str = String(str);
        return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
    }

    function uncomma(str) {
        str = String(str);
        return str.replace(/[^\d]+/g, '');
    }

    function inputNumberFormat(obj) {
        obj.value = comma(uncomma(obj.value));
    }

    function inputOnlyNumberFormat(obj) {
        obj.value = onlynumber(uncomma(obj.value));
    }

    function onlynumber(str) {
        str = String(str);
        return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1');
    }
</script>
<script>
    var btnUpload = $("#upload_file"),
        btnOuter = $(".button_outer");
    btnUpload.on("change", function(e) {
        var ext = btnUpload.val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            $(".error_msg").text("이미지 형식이 아닙니다.");
        } else {
            $(".error_msg").text("");
            btnOuter.addClass("file_uploading");
            setTimeout(function() {
                btnOuter.addClass("file_uploaded");
            }, 3000);
            var uploadedFile = URL.createObjectURL(e.target.files[0]);
            setTimeout(function() {
                $("#uploaded_view").append('<img src="' + uploadedFile + '" />').addClass("show");
            }, 3500);
        }
    });
    $(".file_remove").on("click", function(e) {
        $("#uploaded_view").removeClass("show");
        $("#uploaded_view").find("img").remove();
        btnOuter.removeClass("file_uploading");
        btnOuter.removeClass("file_uploaded");
    });
</script>

<script>
    AOS.init();
</script>