@extends('user.layouts.app')
<link rel=File-List href="Privacy_Policy%20bhandarawala_files/filelist.xml">
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
        mso-footnote-separator: url("Privacy_Policy%20bhandarawala_files/header.htm") fs;
        mso-footnote-continuation-separator: url("Privacy_Policy%20bhandarawala_files/header.htm") fcs;
        mso-endnote-separator: url("Privacy_Policy%20bhandarawala_files/header.htm") es;
        mso-endnote-continuation-separator: url("Privacy_Policy%20bhandarawala_files/header.htm") ecs;
    }

    @page WordSection1 {
        size: 612.0pt 792.0pt;
        margin: 72.0pt 72.0pt 49.65pt 72.0pt;
        mso-header-margin: 36.0pt;
        mso-footer-margin: 36.0pt;
        mso-paper-source: 0;
    }

    div.WordSection1 {
        page: WordSection1;
    }

    /* List Definitions */
    @list l0 {
        mso-list-id: 126555088;
        mso-list-type: hybrid;
        mso-list-template-ids: 1610101568 -1701526198 1074331651 1074331653 1074331649 1074331651 1074331653 1074331649 1074331651 1074331653;
    }

    @list l0:level1 {
        mso-level-number-format: bullet;
        mso-level-text: -;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 54.0pt;
        text-indent: -18.0pt;
        font-family: "Arial", sans-serif;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
    }

    @list l0:level2 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 90.0pt;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l0:level3 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 126.0pt;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l0:level4 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 162.0pt;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l0:level5 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 198.0pt;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l0:level6 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 234.0pt;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l0:level7 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 270.0pt;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l0:level8 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 306.0pt;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l0:level9 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        margin-left: 342.0pt;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l1 {
        mso-list-id: 760025722;
        mso-list-type: hybrid;
        mso-list-template-ids: -1426795612 -1775459170 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;
    }

    @list l1:level1 {
        mso-level-start-at: 0;
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-bidi-font-family: Arial;
    }

    @list l1:level2 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l1:level3 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l1:level4 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l1:level5 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l1:level6 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l1:level7 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l1:level8 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l1:level9 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l2 {
        mso-list-id: 1067844535;
        mso-list-type: hybrid;
        mso-list-template-ids: 1387300180 420089464 1074331651 1074331653 1074331649 1074331651 1074331653 1074331649 1074331651 1074331653;
    }

    @list l2:level1 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
        mso-fareast-font-family: Calibri;
        mso-fareast-theme-font: minor-latin;
        mso-bidi-font-family: Arial;
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
        mso-list-id: 1593006357;
        mso-list-type: hybrid;
        mso-list-template-ids: 1919691250 67698701 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;
    }

    @list l3:level1 {
        mso-level-number-format: bullet;
        mso-level-text: \F0FC;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l3:level2 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l3:level3 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l3:level4 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l3:level5 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l3:level6 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l3:level7 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l3:level8 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l3:level9 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l4 {
        mso-list-id: 1854802446;
        mso-list-type: hybrid;
        mso-list-template-ids: -1924780612 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;
    }

    @list l4:level1 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l4:level2 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l4:level3 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l4:level4 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l4:level5 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l4:level6 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l4:level7 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l4:level8 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l4:level9 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l5 {
        mso-list-id: 1860240046;
        mso-list-type: hybrid;
        mso-list-template-ids: -484531098 1074331659 1074331651 1074331653 1074331649 1074331651 1074331653 1074331649 1074331651 1074331653;
    }

    @list l5:level1 {
        mso-level-number-format: bullet;
        mso-level-text: \F0D8;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l5:level2 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l5:level3 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l5:level4 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l5:level5 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l5:level6 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l5:level7 {
        mso-level-number-format: bullet;
        mso-level-text: \F0B7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Symbol;
    }

    @list l5:level8 {
        mso-level-number-format: bullet;
        mso-level-text: o;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: "Courier New";
    }

    @list l5:level9 {
        mso-level-number-format: bullet;
        mso-level-text: \F0A7;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
        font-family: Wingdings;
    }

    @list l6 {
        mso-list-id: 2069719077;
        mso-list-type: hybrid;
        mso-list-template-ids: -577206046 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675 1074331663 1074331673 1074331675;
    }

    @list l6:level1 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l6:level2 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l6:level3 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l6:level4 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l6:level5 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l6:level6 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
    }

    @list l6:level7 {
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l6:level8 {
        mso-level-number-format: alpha-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: left;
        text-indent: -18.0pt;
    }

    @list l6:level9 {
        mso-level-number-format: roman-lower;
        mso-level-tab-stop: none;
        mso-level-number-position: right;
        text-indent: -9.0pt;
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

            <p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US
                        style='font-size:12.0pt;line-height:107%;font-family:
"Arial",sans-serif'>Privacy
                        Policy<o:p></o:p></span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Thank
                    you for using our services! This Privacy
                    Policy explains how we collect, use, disclose, and safeguard your information
                    when you visit our mobile application or website, including any other media
                    form, media channel, mobile website, or mobile application related or connected
                    thereto (collectively, the &quot;Platform&quot;). Please read this Privacy
                    Policy carefully. If you do not agree with the terms of this Privacy Policy,
                    please do not access the Platform.</span><span lang=EN-US
                    style='font-size:
12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>We
                    reserve the right to make changes to this
                    Privacy Policy at any time and for any reason. We will alert you about any
                    changes by updating the &quot;Effective Date&quot; of this Privacy Policy. You
                    are encouraged to periodically review this Privacy Policy to stay informed of
                    updates. You will be deemed to have been made aware of, will be subject to, and
                    will be deemed to have accepted the changes in any revised Privacy Policy by
                    your continued use of the Platform after the date such revised Privacy Policy
                    is posted.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;
background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Information
                        We Collect:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>We
                    collect information from you when you use our
                    Platform, including when you:</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Register
                    an account</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Make
                    a booking</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Make
                    a payment</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Communicate
                    with us or other users
                    through the Platform</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:
"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Participate
                    in surveys or contests</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing style='margin-left:36.0pt;text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>The
                        information we collect may include:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Personal
                    Information: Name, email
                    address, phone number, and other similar contact data.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Booking
                    Information: Details about
                    the event you are booking services for, including date, time, location, and
                    specific requirements.</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Payment
                    Information: Credit card
                    details, billing address, and other payment transaction details.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Communication
                    Information:
                    Correspondence with us or other users, including chat logs and customer support
                    inquiries.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;
background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Usage
                    Information: Information about
                    how you interact with the Platform, including IP address, browser type, device
                    type, operating system, and usage patterns.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>How
                        We Use Your Information:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>We
                    may use the information we collect from you for
                    the following purposes:</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>To
                    facilitate bookings and provide
                    the services you request.</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>To
                    process payments and fulfill
                    transactions.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;
background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>To
                    communicate with you about your
                    bookings, account, or inquiries.</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>To
                    personalize your experience and
                    tailor content and offers to your preferences.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>To
                    improve our Platform, services,
                    and user experience.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:
"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>To
                    respond to legal requests and
                    prevent fraudulent activities.</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Information
                        Sharing and Disclosure:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>We
                    may share your information with third parties
                    in the following circumstances:</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>With
                    vendors and service providers
                    to fulfill bookings and process payments.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>With
                    other users when necessary to
                    facilitate bookings or resolve disputes.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>With
                    legal authorities when required
                    by law or to protect our rights and interests.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing
                style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l1 level1 lfo7'>
                <![if !supportLists]><span lang=EN-US
                    style='font-size:12.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span
                        style='mso-list:Ignore'>�<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span></span></span>
                <![endif]><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>In
                    connection with a merger,
                    acquisition, or sale of our assets.</span><span lang=EN-US
                    style='font-size:
12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span>
            </p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Data
                        Security:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>We
                    implement reasonable security measures to
                    protect your information from unauthorized access, alteration, disclosure, or
                    destruction. However, please be aware that no method of transmission over the
                    internet or method of electronic storage is 100% secure.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Advertisers:</span></b><b><span
                        lang=EN-US style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>The
                    Site may contain advertising and sponsorships.
                    Advertisers and sponsors are responsible for ensuring that material submitted
                    for inclusion on the Site is accurate and complies with applicable laws. We are
                    not responsible for the illegality or any error, inaccuracy or problem in the
                    advertiser�s or sponsor�s materials.</span><span lang=EN-US
                    style='font-size:
12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Errors,
                        Corrections and Changes:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>We
                    do not represent or warrant that the Site will
                    be error-free, free of viruses or other harmful components, or that defects
                    will be corrected. We do not represent or warrant that the information
                    available on or through the Site will be correct, accurate, timely or otherwise
                    reliable. We may make changes to the features, functionality or content of the
                    Site at any time. We reserve the right in our sole discretion to edit or delete
                    any documents, information or other content appearing on the Site.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Unlawful
                        Activity:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>We
                    reserve the right to investigate complaints or
                    reported violations of this Agreement and to take any action we deem
                    appropriate, including but not limited to reporting any suspected unlawful
                    activity to law enforcement officials, regulators, or other third parties and
                    disclosing any information necessary or appropriate to such persons or entities
                    relating to your profile, email addresses, usage history, posted materials, IP
                    addresses and traffic information.</span><span lang=EN-US
                    style='font-size:
12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Copyrights
                        / Trademarks:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>All
                    content and materials available on this
                    website or app, including but not limited to text, graphics, website name,
                    code, images and logos are the intellectual property of VYY1421 Shree Annakoot
                    Sitaram Private Limited, and are protected by applicable copyright and
                    trademark law. Any inappropriate use, including but not limited to the
                    reproduction, distribution, display or transmission of any content on this site
                    is strictly prohibited, unless specifically authorized by VYY1421 Shree
                    Annakoot Sitaram Private Limited.</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Non-Transferable:</span></b><b><span
                        lang=EN-US style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Your
                    right to use the Site is not transferable or assignable.
                    Any password or right given to you to obtain information or documents is not
                    transferable or assignable.</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Payment
                        Option:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>There
                    are multiple payment options available are
                    internet banking /debit card payment / credit card payment from banks that are
                    listed when selecting each of the above options. Besides from the fee
                    chargeable to Government against each service bank / payment gateway
                    transaction charges will be applicable extra.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Cookies:</span></b><b><span
                        lang=EN-US style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>A
                    cookie is a very small text document, which
                    often includes an anonymous unique identifier. When you visit a website, that
                    site�s computer asks your computer for permission to store this file in a part
                    of your hard drive specifically designated for cookies. Each website can send
                    its own cookie to your browser if your browser�s preferences allow it, but (to
                    protect your privacy) your browser only permits a website to access the cookies
                    it has already sent to you, not the cookies sent to you by other sites.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif'>Security:<o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif'>
                        <o:p>&nbsp;</o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif'>We have established
                    appropriate physical, electronic and managerial procedures to safeguard and
                    secure information we collect via this website/app. We cannot enforce or
                    control the security of devices and networks that you may use to submit
                    information to us. We are not responsible for the disclosure or interception of
                    your information before we receive it.<o:p></o:p></span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif'>Further, we employ
                    security measures to prevent unauthorized access to information that we collect
                    online. However, we cannot guarantee the security of your personal information.<span
                        style='background:#f5f5f5'>
                        <o:p></o:p>
                    </span></span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Your
                        Choices:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>You
                    can review and update your account information
                    at any time by logging into your account settings. You may also contact us to
                    request access to, correction, or deletion of your personal information</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>Contact
                        Us:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>If
                    you have any questions, concerns, or feedback
                    about this Privacy Policy, please contact us at - rawatpriyankamalik1401@gmail.com.</span><span
                    lang=EN-US style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>By
                    using our Platform, you consent to our Privacy
                    Policy and agree to its terms.</span><span lang=EN-US
                    style='font-size:12.0pt;
font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>End
                        of Privacy Policy:</span></b><b><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                        <o:p></o:p>
                    </span></b></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;mso-color-alt:
windowtext;background:#f5f5f5'>This
                    Privacy Policy applies solely to information
                    collected by our Platform. Please note that our Platform may contain links to
                    other websites or services that we do not control and are not responsible for.
                    We encourage you to review the privacy policies of any third-party websites or
                    services you visit.</span><span lang=EN-US
                    style='font-size:12.0pt;font-family:
"Arial",sans-serif;background:#f5f5f5'>
                    <o:p></o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-align:justify'><span lang=EN-US
                    style='font-size:12.0pt;font-family:"Arial",sans-serif;background:#f5f5f5'>
                    <o:p>&nbsp;</o:p>
                </span></p>

            <p class=MsoNoSpacing style='text-indent:36.0pt'><i><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;color:black;
mso-color-alt:windowtext;background:#f5f5f5'>Effective
                        Date: 26.01.2024</span></i><i><span lang=EN-US
                        style='font-size:12.0pt;font-family:"Arial",sans-serif;background:
white'>
                        <o:p></o:p>
                    </span></i></p>

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
