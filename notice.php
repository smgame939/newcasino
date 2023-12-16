<?php

include('inc/versions.php');

?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<title>SMGame Newtemplate V3 :: Notice</title>
	<base href=".">
	<meta name="renderer" content="webkit">
	<meta name="force-rendering" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta name="application-version" content="3.111.0">
	<meta name="theme-color" content="#ffffff">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<link rel="stylesheet" href="css/event.css?v=<?php echo $ver; ?>">
	<link rel="stylesheet" href="css/headtitle.css?v=<?php echo $ver; ?>">
	<link rel="stylesheet" href="css/newv3.css?v=<?php echo $ver; ?>">

</head>

<body>

	<div id="app" class="webp">
		<div>
			<div class="allContent">
				<?php include('inc/sidemenu.php'); ?>

				<div class="rightContent homePage">
					<div class="contents">
						<div class="main_content_continer">
							<?php include('inc/header.php'); ?>

							<div>
								<div class="main-content">
									<div class="">
										<div class="titlePic">
											<div class="titlePwrapper">
												<div class="leftZone"><span class="icon-iiconLogoB"></span><span>베팅내역</span></div>
												<div class="line"></div>
											</div>
										</div>
										<div class="main_content">
											<div class="main_content_wrap main_content_wrap_notice">
												<div class="noticeFrame">
													<div>
														<div class="listZone">
															<table>
																<tbody>
																	<tr>
																		<th class="ac number" width="10%"> No. </th>
																		<th class="ac" width="70%">제목</th>
																		<th class="ac name" width="20%">작성자</th><!---->
																	</tr>
																	<tr>
																		<td class="ac">
																			<div class="important">중요</div>
																		</td>
																		<td class="al"><a href="javascript: void(0)">[필독] 🚨사칭 주의보🚨</a></td>
																		<td class="ac fc"><img class="logo" src="/assets/image/logo_smgame.svg"></td><!---->
																	</tr>
																	<tr>
																		<td class="ac">
																			<div class="important">중요</div>
																		</td>
																		<td class="al"><a href="javascript: void(0)">1:1 전용계좌 유의사항 안내</a></td>
																		<td class="ac fc"><img class="logo" src="/assets/image/logo_smgame.svg"></td><!---->
																	</tr>
																	<tr>
																		<td class="ac"><span>1</span></td>
																		<td class="al"><a href="javascript: void(0)">K CASINO 이용 규정</a></td>
																		<td class="ac fc"><img class="logo" src="/assets/image/logo_smgame.svg"></td><!---->
																	</tr>
																</tbody>
															</table>
															<div style="" class="">
																<div class="noDataFrame">
																	<div class="pic"><img src="/assets/noData-d5ec671e.png" alt="no-data"></div>
																	<h2>데이터 없음</h2>
																	<h3>Sorry, Check no data</h3>
																</div>
															</div>
														</div>
													</div>
													<div class="pager_block">
														<div class="page-list">
															<ul class="pagination">
																<li class="first"><a href="javascript: void(0)"><span>처음</span></a></li>
																<li class="prev"><a href="javascript: void(0)"><span>이전</span></a></li>
																<li class="pages"><a href="javascript: void(0)" class="on"><span>1</span></a></li>
																<li class="next"><a href="javascript: void(0)"><span>다음</span></a></li>
																<li class="last"><a href="javascript: void(0)"><span>끝</span></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php include('inc/footer.php'); ?>
						</div>
					</div>
				</div>

			</div>
			<!----><!---->
		</div>
		<!----><!---->

		<div class="modals-container"></div>
		<div id="login-container"></div>

		<script src="/js/jquery.min.js"></script>
		<script src="/js/newv3.js?v=<?php echo $ver; ?>"></script>


</body>

</html>