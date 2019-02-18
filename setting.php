<?php
# 이 파일은 FNBase.xyz에서 배포하는 게시글 관리 엔진의 설정 파일입니다.

/* 이 아래는 중요 설정이며, 반드시 기입하셔야 합니다. */
$bySite = ''; #설치하신 주소입니다.
$bySiteName = ''; #운영하실 사이트의 이름입니다.
$bySiteColor = '#'; #사이트의 대표 색상입니다.
$bySiteSubColor = '#'; #사이트의 보조 색상입니다.
$bySiteMode = 'wiki'; #사이트의 동작 방식을 정의합니다. 현재는 변경하실 수 없습니다.

#데이터베이스 연결 설정입니다.
$bySiteDB = '';
$bySiteDBname = '';
$bySiteDBuser = '';
$bySiteDBpw = '';

/* 이 아래는 세부 설정이며, 기입하지 않으셔도 됩니다. */
$bySiteTitle = $bySiteName; #운영하실 사이트의 제목입니다. 검색엔진이나 브라우저 탭의 제목으로 표시됩니다.
$bySiteFront = '대문'; #기본 페이지 이름입니다.
$bySite_img = TRUE; #이미지 업로드 허용 여부입니다.
$bySiteDesc = ''; #운영하실 사이트에 대한 설명입니다.
$bySiteFab = ''; #운영하실 사이트의 파비콘입니다.
$bySiteFooter = ''; #사이트의 바닥글에 들어갈 내용입니다.
$bySite_isp = FALSE; #사이트의 공개 설정입니다. 현재는 변경하실 수 없습니다.
$bySiteStart = '2019'; #사이트의 바닥글에 표시될 시작 년도입니다.
$bySite_google = ''; #구글 사이트 관리 스크립트 입력 가능합니다.
?>