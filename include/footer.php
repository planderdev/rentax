

<!--bottom modal s-->
<div class="modal fade d-none" id="myModal" tabindex="-1" aria-labelledby="알림팝업" aria-hidden="true">
  <div class="modal-dialog modal-dialog-bottom">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">세무 일정 알림</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="px-3">
        <span class="material-symbols-outlined">brightness_alert</span>
        <p><strong>사업장현황신고 기간입니다.</strong></p>
        <p>2월 10일까지 주택임대소득에 대한<br>사업장현황신고를 해주세요.</p>
  </div> 
      </div>
      <!--div class="modal-footer">
      <button type="button" class="btn btn-tranparent cl_info" id="modal-today-close">오늘 하루 보지 않기</button>
        <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal">확인</button>
       </div-->
    </div>
  </div>
</div>
<!--bottom modal e-->

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
                <div class="date">23년 05월20일</div>
                <div class="title">미처리 임대관리 업무</div>
                </div>
                <div class="label"><span class="badge text-bg-primary">2건</span>
                </div>
            </li>
            <li>
            <div class="txt">
                <div class="date">23년 05월20일</div>
                <div class="title">미처리 임대관리 업무</div>
                </div>
                <div class="label"><span class="badge text-bg-primary">2건</span>
                </div>
            </li>
            <li>
            <div class="txt">
                <div class="date">23년 05월20일</div>
                <div class="title">미처리 임대관리 업무</div>
                </div>
                <div class="label"><span class="badge text-bg-primary">2건</span>
                </div>
            </li>
        </ul>
        </div>
        </div>
        </div>
        <!--div class="modal-footer bg-primary-lightest border-0">
          <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal">닫기</button>
         </div-->
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
                    <button type="button" class="btn btn-md  btn-primary"
                        onclick="location.href='join2.html'">확인</button>
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
                    <button type="button" class="btn btn-md  btn-primary"
                        onclick="location.href='join2.html'">임대계약 등록</button>
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
                    <button type="button" class="btn btn-md  btn-primary"
                        onclick="location.href='join2.html'">임대관리 이동</button>
                </div>
            </div>
        </div>
    </div>
     <!--등록 진행 modal e-->

</div>
<!--wrap e--> 

 
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
	    return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g,'$1');
	}
</script>
 
<script>
 AOS.init(); 
</script> 