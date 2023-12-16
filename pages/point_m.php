<div id="app" class="webp">
    <div><!---->
        <?php include('inc/sidemenu_m.php'); ?>
        <section id="out-wrapper" class=""><!---->
            <?php include('inc/header_m.php'); ?>
            <section id="content" class="">
                <div class="wrapPage">
                    <div class="wrapper title-border">
                        <div class="title-p">
                            <div>상세정보</div><span>Point Details</span>
                        </div>
                        <div class="full-table">
                            <table class="point">
                                <tbody>
                                    <tr>
                                        <th class="w35">보유머니</th>
                                        <td class="w65"><b>₩ 0</b></td>
                                    </tr>
                                    <tr>
                                        <th class="w35">보유 포인트</th>
                                        <td class="w65"><b>0 P</b></td>
                                    </tr>
                                    <tr>
                                        <th class="w35">포인트 전환</th>
                                        <td class="w65"><input id="point-exchange" type="text" pattern="[0-9]*" inputmode="numeric" class="" placeholder="">
                                            <div class="amount-btnbox"><button class="amount-button">전체 포인트</button><button class="amount-button">10,000 p </button><button class="amount-button">100,000 p </button><button class="amount-button">1,000,000 p </button></div><button class="reset-button">초기화</button><button class="confirm-button">보유머니로 전환</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="title-p">
                            <div>포인트 내역</div>
                        </div>
                        <div class="content-table exchange-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="w20">시간</th>
                                        <th class="w20">유형</th>
                                        <th class="w20">포인트</th>
                                        <th class="w20">더 보기</th>
                                        <th class="w20">메모</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="5">
                                            <p class="noData" style=""><img src="/assets/image/noData-img-8eaceed0.png" alt="no-data"><b>데이터 없음</b><span>Sorry, Check no data</span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination" style="display: none;">
                            <ul>
                                <li class="first"><a href="javascript: void(0)">처음</a></li>
                                <li class="prev"><a href="javascript: void(0)">이전</a></li>
                                <li class="next"><a href="javascript: void(0)">다음</a></li>
                                <li class="last"><a href="javascript: void(0)">끝</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div id="promotion"></div>
            <?php include('inc/footer_m.php'); ?>
            <div style="display: none;">
                <div class="point-flow-bar draggable" style="left: 103.5px; top: 716.8px;">
                    <div class="bg">
                        <div class="coin"><img src="/assets/image/flow-coin-e77a03a9.png" alt="flow-coin"></div>
                        <div class="content point-flow-button">
                            <p>현재 수령 가능한 롤링콤프는 <b class="amount">0</b> 원 입니다.</p>
                        </div><span class="close-flow-button icon-flow-close"></span>
                    </div>
                </div>
            </div><!---->
        </section>
        <div id="login-container"></div>
    </div>
    <div class="modals-container"></div>
</div>