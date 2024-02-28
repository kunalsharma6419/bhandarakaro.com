@extends('user.layouts.app')
<link rel=themeData href="Cancellation_&amp;_Refund_Policy%20bhandara_files/themedata.thmx">
<link rel=colorSchemeMapping href="Cancellation_&amp;_Refund_Policy%20bhandara_files/colorschememapping.xml">
<style>
    /* Font Definitions */
    @font-face {
        font-family: Wingdings;
        panose-1: 5 0 0 0 0 0 0 0 0 0;
        mso-font-charset: 2;
        mso-generic-font-family: auto;
        mso-font-pitch: variable;
        mso-font-signature: 0 268435456 0 0 -2147483648 0;
    }

    @font-face {
        font-family: "Cambria Math";
        panose-1: 2 4 5 3 5 4 6 3 2 4;
        mso-font-charset: 0;
        mso-generic-font-family: roman;
        mso-font-pitch: variable;
        mso-font-signature: -536869121 1107305727 33554432 0 415 0;
    }

    @font-face {
        font-family: Calibri;
        panose-1: 2 15 5 2 2 2 4 3 2 4;
        mso-font-charset: 0;
        mso-generic-font-family: swiss;
        mso-font-pitch: variable;
        mso-font-signature: -469750017 -1040178053 9 0 511 0;
    }

    /* Style Definitions */
    p.MsoNormal,
    li.MsoNormal,
    div.MsoNormal {
        mso-style-unhide: no;
        mso-style-qformat: yes;
        mso-style-parent: "";
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8.0pt;
        margin-left: 0cm;
        line-height: 107%;
        mso-pagination: widow-orphan;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    h2 {
        mso-style-priority: 9;
        mso-style-qformat: yes;
        mso-style-link: "Heading 2 Char";
        mso-style-next: Normal;
        margin-top: 2.0pt;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 0cm;
        line-height: 107%;
        mso-pagination: widow-orphan lines-together;
        page-break-after: avoid;
        mso-outline-level: 2;
        font-size: 13.0pt;
        font-family: "Calibri Light", sans-serif;
        mso-ascii-font-family: "Calibri Light";
        mso-ascii-theme-font: major-latin;
        mso-fareast-font-family: "Times New Roman";
        mso-fareast-theme-font: major-fareast;
        mso-hansi-font-family: "Calibri Light";
        mso-hansi-theme-font: major-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: major-bidi;
        color: #2E74B5;
        mso-themecolor: accent1;
        mso-themeshade: 191;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
        font-weight: normal;
    }

    h3 {
        mso-style-noshow: yes;
        mso-style-priority: 9;
        mso-style-qformat: yes;
        mso-style-link: "Heading 3 Char";
        mso-style-next: Normal;
        margin-top: 2.0pt;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 0cm;
        line-height: 107%;
        mso-pagination: widow-orphan lines-together;
        page-break-after: avoid;
        mso-outline-level: 3;
        font-size: 12.0pt;
        font-family: "Calibri Light", sans-serif;
        mso-ascii-font-family: "Calibri Light";
        mso-ascii-theme-font: major-latin;
        mso-fareast-font-family: "Times New Roman";
        mso-fareast-theme-font: major-fareast;
        mso-hansi-font-family: "Calibri Light";
        mso-hansi-theme-font: major-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: major-bidi;
        color: #1F4D78;
        mso-themecolor: accent1;
        mso-themeshade: 127;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
        font-weight: normal;
    }

    h4 {
        mso-style-noshow: yes;
        mso-style-priority: 9;
        mso-style-qformat: yes;
        mso-style-link: "Heading 4 Char";
        mso-style-next: Normal;
        margin-top: 2.0pt;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 0cm;
        line-height: 107%;
        mso-pagination: widow-orphan lines-together;
        page-break-after: avoid;
        mso-outline-level: 4;
        font-size: 11.0pt;
        font-family: "Calibri Light", sans-serif;
        mso-ascii-font-family: "Calibri Light";
        mso-ascii-theme-font: major-latin;
        mso-fareast-font-family: "Times New Roman";
        mso-fareast-theme-font: major-fareast;
        mso-hansi-font-family: "Calibri Light";
        mso-hansi-theme-font: major-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: major-bidi;
        color: #2E74B5;
        mso-themecolor: accent1;
        mso-themeshade: 191;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
        font-weight: normal;
        font-style: italic;
    }

    p.MsoHeader,
    li.MsoHeader,
    div.MsoHeader {
        mso-style-priority: 99;
        mso-style-link: "Header Char";
        margin: 0cm;
        mso-pagination: widow-orphan;
        tab-stops: center 234.0pt right 468.0pt;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    p.MsoFooter,
    li.MsoFooter,
    div.MsoFooter {
        mso-style-priority: 99;
        mso-style-link: "Footer Char";
        margin: 0cm;
        mso-pagination: widow-orphan;
        tab-stops: center 234.0pt right 468.0pt;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    a:link,
    span.MsoHyperlink {
        mso-style-priority: 99;
        color: #0563C1;
        mso-themecolor: hyperlink;
        text-decoration: underline;
        text-underline: single;
    }

    a:visited,
    span.MsoHyperlinkFollowed {
        mso-style-noshow: yes;
        mso-style-priority: 99;
        color: #954F72;
        mso-themecolor: followedhyperlink;
        text-decoration: underline;
        text-underline: single;
    }

    p {
        mso-style-priority: 99;
        mso-margin-top-alt: auto;
        margin-right: 0cm;
        mso-margin-bottom-alt: auto;
        margin-left: 0cm;
        mso-pagination: widow-orphan;
        font-size: 12.0pt;
        font-family: "Times New Roman", serif;
        mso-fareast-font-family: "Times New Roman";
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    p.MsoNoSpacing,
    li.MsoNoSpacing,
    div.MsoNoSpacing {
        mso-style-priority: 1;
        mso-style-unhide: no;
        mso-style-qformat: yes;
        mso-style-parent: "";
        margin: 0cm;
        mso-pagination: widow-orphan;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    p.MsoListParagraph,
    li.MsoListParagraph,
    div.MsoListParagraph {
        mso-style-priority: 34;
        mso-style-unhide: no;
        mso-style-qformat: yes;
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8.0pt;
        margin-left: 36.0pt;
        mso-add-space: auto;
        line-height: 107%;
        mso-pagination: widow-orphan;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    p.MsoListParagraphCxSpFirst,
    li.MsoListParagraphCxSpFirst,
    div.MsoListParagraphCxSpFirst {
        mso-style-priority: 34;
        mso-style-unhide: no;
        mso-style-qformat: yes;
        mso-style-type: export-only;
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 36.0pt;
        mso-add-space: auto;
        line-height: 107%;
        mso-pagination: widow-orphan;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    p.MsoListParagraphCxSpMiddle,
    li.MsoListParagraphCxSpMiddle,
    div.MsoListParagraphCxSpMiddle {
        mso-style-priority: 34;
        mso-style-unhide: no;
        mso-style-qformat: yes;
        mso-style-type: export-only;
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 36.0pt;
        mso-add-space: auto;
        line-height: 107%;
        mso-pagination: widow-orphan;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    p.MsoListParagraphCxSpLast,
    li.MsoListParagraphCxSpLast,
    div.MsoListParagraphCxSpLast {
        mso-style-priority: 34;
        mso-style-unhide: no;
        mso-style-qformat: yes;
        mso-style-type: export-only;
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8.0pt;
        margin-left: 36.0pt;
        mso-add-space: auto;
        line-height: 107%;
        mso-pagination: widow-orphan;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    span.HeaderChar {
        mso-style-name: "Header Char";
        mso-style-priority: 99;
        mso-style-unhide: no;
        mso-style-locked: yes;
        mso-style-link: Header;
    }

    span.FooterChar {
        mso-style-name: "Footer Char";
        mso-style-priority: 99;
        mso-style-unhide: no;
        mso-style-locked: yes;
        mso-style-link: Footer;
    }

    span.Heading2Char {
        mso-style-name: "Heading 2 Char";
        mso-style-priority: 9;
        mso-style-unhide: no;
        mso-style-locked: yes;
        mso-style-link: "Heading 2";
        mso-ansi-font-size: 13.0pt;
        mso-bidi-font-size: 13.0pt;
        font-family: "Calibri Light", sans-serif;
        mso-ascii-font-family: "Calibri Light";
        mso-ascii-theme-font: major-latin;
        mso-fareast-font-family: "Times New Roman";
        mso-fareast-theme-font: major-fareast;
        mso-hansi-font-family: "Calibri Light";
        mso-hansi-theme-font: major-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: major-bidi;
        color: #2E74B5;
        mso-themecolor: accent1;
        mso-themeshade: 191;
    }

    span.Heading3Char {
        mso-style-name: "Heading 3 Char";
        mso-style-noshow: yes;
        mso-style-priority: 9;
        mso-style-unhide: no;
        mso-style-locked: yes;
        mso-style-link: "Heading 3";
        mso-ansi-font-size: 12.0pt;
        mso-bidi-font-size: 12.0pt;
        font-family: "Calibri Light", sans-serif;
        mso-ascii-font-family: "Calibri Light";
        mso-ascii-theme-font: major-latin;
        mso-fareast-font-family: "Times New Roman";
        mso-fareast-theme-font: major-fareast;
        mso-hansi-font-family: "Calibri Light";
        mso-hansi-theme-font: major-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: major-bidi;
        color: #1F4D78;
        mso-themecolor: accent1;
        mso-themeshade: 127;
    }

    span.Heading4Char {
        mso-style-name: "Heading 4 Char";
        mso-style-noshow: yes;
        mso-style-priority: 9;
        mso-style-unhide: no;
        mso-style-locked: yes;
        mso-style-link: "Heading 4";
        font-family: "Calibri Light", sans-serif;
        mso-ascii-font-family: "Calibri Light";
        mso-ascii-theme-font: major-latin;
        mso-fareast-font-family: "Times New Roman";
        mso-fareast-theme-font: major-fareast;
        mso-hansi-font-family: "Calibri Light";
        mso-hansi-theme-font: major-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: major-bidi;
        color: #2E74B5;
        mso-themecolor: accent1;
        mso-themeshade: 191;
        font-style: italic;
    }

    .MsoChpDefault {
        mso-style-type: export-only;
        mso-default-props: yes;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-font-kerning: 0pt;
        mso-ligatures: none;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }

    .MsoPapDefault {
        mso-style-type: export-only;
        margin-bottom: 8.0pt;
        line-height: 107%;
    }

    /* Page Definitions */
    @page {
        mso-footnote-separator: url("Cancellation_&_Refund_Policy%20bhandara_files/header.htm") fs;
        mso-footnote-continuation-separator: url("Cancellation_&_Refund_Policy%20bhandara_files/header.htm") fcs;
        mso-endnote-separator: url("Cancellation_&_Refund_Policy%20bhandara_files/header.htm") es;
        mso-endnote-continuation-separator: url("Cancellation_&_Refund_Policy%20bhandara_files/header.htm") ecs;
    }

    @page WordSection1 {
        size: 612.0pt 792.0pt;
        margin: 72.0pt 72.0pt 72.0pt 72.0pt;
        mso-header-margin: 36.0pt;
        mso-footer-margin: 36.0pt;
        mso-paper-source: 0;
    }

    div.WordSection1 {
        page: WordSection1;
    }

    /* List Definitions */
    @list l0 {
        mso-list-id: 1035421697;
        mso-list-type: hybrid;
        mso-list-template-ids: 2110007566 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;
    }

    @list l0:level1 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l0:level2 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l0:level3 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l0:level4 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l0:level5 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l0:level6 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l0:level7 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l0:level8 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l0:level9 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l1 {
        mso-list-id: 1174418982;
        mso-list-type: hybrid;
        mso-list-template-ids: -873051404 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;
    }

    @list l1:level1 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l1:level2 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l1:level3 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l1:level4 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l1:level5 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l1:level6 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l1:level7 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l1:level8 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l1:level9 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l2 {
        mso-list-id: 1593006357;
        mso-list-type: hybrid;
        mso-list-template-ids: 1919691250 67698701 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;
    }

    @list l2:level1 {
        mso-level-number-format: bullet;
        mso-level-text: \F0FC;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l2:level2 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l2:level3 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l2:level4 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l2:level5 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l2:level6 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l2:level7 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l2:level8 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l2:level9 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l3 {
        mso-list-id: 2045790058;
        mso-list-type: hybrid;
        mso-list-template-ids: -1664441646 1235275072 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;
    }

    @list l3:level1 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 54.0pt;
        text-indent: -18.0pt;
        font-family: Symbol;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-bidi-font-family: Arial;
    }

    @list l3:level2 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 90.0pt;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l3:level3 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 126.0pt;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l3:level4 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 162.0pt;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l3:level5 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 198.0pt;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l3:level6 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 234.0pt;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l3:level7 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 270.0pt;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l3:level8 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 306.0pt;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l3:level9 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 342.0pt;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    ol {
        margin-bottom: 0cm;
    }

    ul {
        margin-bottom: 0cm;
    }

    /* Style Definitions */
    table.MsoNormalTable {
        mso-style-name: "Table Normal";
        mso-tstyle-rowband-size: 0;
        mso-tstyle-colband-size: 0;
        mso-style-noshow: yes;
        mso-style-priority: 99;
        mso-style-parent: "";
        mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;
        mso-para-margin-top: 0cm;
        mso-para-margin-right: 0cm;
        mso-para-margin-bottom: 8.0pt;
        mso-para-margin-left: 0cm;
        line-height: 107%;
        mso-pagination: widow-orphan;
        font-size: 11.0pt;
        font-family: "Calibri", sans-serif;
        mso-ascii-font-family: Calibri;
        mso-ascii-theme-font: minor-latin;
        mso-hansi-font-family: Calibri;
        mso-hansi-theme-font: minor-latin;
        mso-bidi-font-family: "Times New Roman";
        mso-bidi-theme-font: minor-bidi;
        mso-ansi-language: EN-US;
        mso-fareast-language: EN-US;
    }
</style>
@section('maincontent')
    @include('user.components.header')


    @include('user.components.osahan_home')



    <div class="clearfix"></div>

    <div class="osahan-home-page" style="padding: 40px;">
        @include('user.components.filtermodal')
        <div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Cancellation &amp; Refund
Policy<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify'><b
style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>At
�VYY1421 Shree Annakoot Sitaram Private Limited� or �Bhandarawala�, we strive
to provide exceptional service and support to our clients throughout the event
planning process. We understand that unforeseen circumstances may arise,
leading to the need for cancellations or adjustments to bookings. Please review
our cancellation and refund policy outlined below:<o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:0cm;mso-add-space:auto;
text-align:justify;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>Cancellation
Policy<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Client Initiated
Cancellations:</span></b><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'> Clients may initiate cancellations of
bookings for various reasons. To cancel a booking, clients must notify us as
soon as possible, preferably in writing or through our designated communication
channels.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Vendor Initiated
Cancellations:</span></b><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'> In rare cases, vendors may need to cancel
bookings due to unforeseen circumstances or emergencies. In such instances, we
will work closely with clients to find suitable alternatives or provide refunds
as applicable.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>Refund
Policy<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Refund Eligibility:</span></b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>
Refund eligibility varies depending on the timing and nature of the
cancellation.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Full Refunds:</span></b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>
Full refunds may be issued for cancellations made within the specified
cancellation window, typically determined by the terms of the booking agreement.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Partial Refunds:</span></b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>
Partial refunds may be considered for cancellations made after the specified
cancellation window, subject to applicable fees or penalties.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Non-Refundable Deposits:</span></b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>
Some bookings may require non-refundable deposits or payments, which are
forfeited in the event of cancellations.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Refund Process:</span></b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>
Refunds will be processed using the original payment method whenever possible.
Please allow a reasonable processing time for refunds to reflect in your
account.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>Rescheduling
Policy<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Rescheduling Requests:</span></b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>
Clients may request to reschedule bookings in lieu of cancellations, subject to
vendor availability and approval. We will make every effort to accommodate
rescheduling requests whenever feasible.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Rescheduling Fees:</span></b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>
Additional fees or charges may apply for rescheduling bookings, particularly if
the new date or terms incur additional costs or adjustments.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>Force
Majeure Events<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:54.0pt;mso-add-space:auto;text-align:justify;
text-indent:-18.0pt;mso-list:l3 level1 lfo4'><![if !supportLists]><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><b><span lang=EN-US style='font-size:12.0pt;
line-height:107%;font-family:"Arial",sans-serif'>Force Majeure Clause:</span></b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>
In the event of unforeseeable circumstances beyond our control, such as natural
disasters, government actions, or pandemics, our cancellation and refund
policies may be subject to modification or waiver.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>Contact
Us<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'>For cancellation requests, rescheduling
inquiries, or further assistance, please contact our customer support team: <b>rawatpriyankamalik1401@gmail.com
or +91</b></span><b><span lang=EN-US> </span></b><b><span lang=EN-US
style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>9650815489.<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;mso-list:l0 level1 lfo3'><![if !supportLists]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif;
mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>6.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'>Policy
Updates<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'>We reserve the right to update, modify, or
amend our cancellation and refund policy at any time without prior notice. Any
changes to our policy will be effective immediately upon posting on our website
or communication with affected clients.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'>All refund requests must be made within 3
days of booking. We will process your request within 15 to 20 working days of
receiving all the information required for processing refund like reason for
refund, bank details for processing request or any other relevant details if
any.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'>By using our services, you acknowledge and
agree to abide by the terms and conditions of our cancellation and refund
policy.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'>Thank you for choosing VYY1421 Shree
Annakoot Sitaram Private Limited. We appreciate your understanding and
cooperation regarding our cancellation and refund procedures.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;mso-add-space:
auto;text-align:justify'><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:0cm;mso-add-space:auto;
text-align:justify'><i><span lang=EN-US style='font-size:12.0pt;line-height:
107%;font-family:"Arial",sans-serif'>Effective Date: 26.01.2024<o:p></o:p></span></i></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify'><span
lang=EN-US style='font-size:12.0pt;line-height:107%;font-family:"Arial",sans-serif'><o:p>&nbsp;</o:p></span></p>

</div>
    </div>

    </div>
    </div>
    </div>

    <div class="container">

    </div>
    </div>



    <div class="clearfix"></div>


    @include('user.components.osahanmenufooter')


    <div class="clearfix"></div>

    @include('user.components.footer')


    @include('user.components.scripts')
@endsection
