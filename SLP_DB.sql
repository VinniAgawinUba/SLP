-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 06:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slp`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `thumb_nail_pic` varchar(191) NOT NULL COMMENT 'articles thumbnail pic',
  `thumb_nail_title` varchar(191) NOT NULL,
  `thumb_nail_summary` text NOT NULL,
  `content` text NOT NULL,
  `published_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `project_id`, `thumb_nail_pic`, `thumb_nail_title`, `thumb_nail_summary`, `content`, `published_date`) VALUES
(1, 1, '1712248697.png', 'Ben Jimenez #1 DA', 'Cascading Style Sheets (CSS) is a style sheet language used for specifying the presentation and styling of a document written in a markup language such as HTML or XML (including XML dialects such as SVG, MathML or XHTML).[1] CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', '<p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><b style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Cascading Style Sheets</b> (<b style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">CSS</b>) is a <a href=\"https://en.wikipedia.org/wiki/Style_sheet_language\" title=\"Style sheet language\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">style sheet language</a> used for specifying the <a href=\"https://en.wikipedia.org/wiki/Presentation_semantics\" title=\"Presentation semantics\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">presentation</a> and styling of a document written in a <a href=\"https://en.wikipedia.org/wiki/Markup_language\" title=\"Markup language\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">markup language</a> such as <a href=\"https://en.wikipedia.org/wiki/HTML\" title=\"HTML\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">HTML</a> or <a href=\"https://en.wikipedia.org/wiki/XML\" title=\"XML\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">XML</a> (including XML dialects such as <a href=\"https://en.wikipedia.org/wiki/SVG\" title=\"SVG\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">SVG</a>, <a href=\"https://en.wikipedia.org/wiki/MathML\" title=\"MathML\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">MathML</a> or <a href=\"https://en.wikipedia.org/wiki/XHTML\" title=\"XHTML\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">XHTML</a>).<sup id=\"cite_ref-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/CSS#cite_note-1\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">[1]</a></sup> CSS is a cornerstone technology of the <a href=\"https://en.wikipedia.org/wiki/World_Wide_Web\" title=\"World Wide Web\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">World Wide Web</a>, alongside HTML and <a href=\"https://en.wikipedia.org/wiki/JavaScript\" title=\"JavaScript\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">JavaScript</a>.<sup id=\"cite_ref-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/CSS#cite_note-2\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">[2]</a></sup></p><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">CSS is designed to enable the <a href=\"https://en.wikipedia.org/wiki/Separation_of_content_and_presentation\" title=\"Separation of content and presentation\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">separation of content and presentation</a>, including <a href=\"https://en.wikipedia.org/wiki/Page_layout\" title=\"Page layout\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">layout</a>, <a href=\"https://en.wikipedia.org/wiki/Color\" title=\"Color\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">colors</a>, and <a href=\"https://en.wikipedia.org/wiki/Typeface\" title=\"Typeface\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">fonts</a>.<sup id=\"cite_ref-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/CSS#cite_note-3\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">[3]</a></sup> This separation can improve content <a href=\"https://en.wikipedia.org/wiki/Accessibility\" title=\"Accessibility\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">accessibility</a>;<sup class=\"noprint Inline-Template\" style=\"line-height: 1; font-size: 11.2px; text-wrap: nowrap; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">[<i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/Wikipedia:Please_clarify\" title=\"Wikipedia:Please clarify\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span title=\"The text near this tag needs further explanation. (December 2023)\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">further explanation needed</span></a></i>]</sup> provide more flexibility and control in the specification of presentation characteristics; enable multiple <a href=\"https://en.wikipedia.org/wiki/Web_page\" title=\"Web page\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">web pages</a> to share formatting by specifying the relevant CSS in a separate .css file, which reduces complexity and repetition in the structural content; and enable the .css file to be <a href=\"https://en.wikipedia.org/wiki/Cache_(computing)\" title=\"Cache (computing)\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">cached</a> to improve the page load speed between the pages that share the file and its formatting.</p><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or <a href=\"https://en.wikipedia.org/wiki/Screen_reader\" title=\"Screen reader\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">screen reader</a>), and on <a href=\"https://en.wikipedia.org/wiki/Braille_display\" class=\"mw-redirect\" title=\"Braille display\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Braille-based</a> tactile devices. CSS also has rules for alternate formatting if the content is accessed on a <a href=\"https://en.wikipedia.org/wiki/Mobile_device\" title=\"Mobile device\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">mobile device</a>.<sup id=\"cite_ref-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/CSS#cite_note-4\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">[4]</a></sup></p><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">The name <i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">cascading</i> comes from the specified priority scheme to determine which declaration applies if more than one declaration of a property match a particular element. This cascading priority scheme is predictable.</p><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">The CSS specifications are maintained by the <a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium\" title=\"World Wide Web Consortium\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">World Wide Web Consortium</a> (W3C). Internet media type (<a href=\"https://en.wikipedia.org/wiki/MIME_media_type\" class=\"mw-redirect\" title=\"MIME media type\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">MIME type</a>) <code style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background-color: rgb(248, 249, 250); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px;\">text/css</code> is registered for use with CSS by RFC 2318 (March 1998). The W3C operates a free <a href=\"https://en.wikipedia.org/wiki/W3C_Markup_Validation_Service#CSS_validation\" title=\"W3C Markup Validation Service\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">CSS validation service</a> for CSS documents.<sup id=\"cite_ref-5\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/CSS#cite_note-5\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">[5]</a></sup></p><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">In addition to HTML, other markup languages support the use of CSS including <a href=\"https://en.wikipedia.org/wiki/XHTML\" title=\"XHTML\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">XHTML</a>, <a href=\"https://en.wikipedia.org/wiki/Plain_Old_XML\" title=\"Plain Old XML\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">plain XML</a>, <a href=\"https://en.wikipedia.org/wiki/SVG\" title=\"SVG\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">SVG</a>, and <a href=\"https://en.wikipedia.org/wiki/XUL\" title=\"XUL\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">XUL</a>. CSS is also used in the <a href=\"https://en.wikipedia.org/wiki/GTK\" title=\"GTK\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">GTK</a> <a href=\"https://en.wikipedia.org/wiki/Widget_toolkit\" title=\"Widget toolkit\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">widget toolkit</a>.</p><h2 style=\"margin: 0.25em 0px; padding-top: 0.5em; padding-bottom: 0.17em; overflow: hidden; border-bottom: 1px solid rgb(162, 169, 177); font-size: 1.5em; font-family: \"Linux Libertine\", Georgia, Times, \"Source Serif Pro\", serif; line-height: 1.375; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-headline\" id=\"Syntax\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Syntax</span><span class=\"mw-editsection\" style=\"user-select: none; font-size: small; margin-left: 1em; vertical-align: baseline; line-height: 0; font-family: sans-serif; unicode-bidi: isolate; margin-right: 0px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-right: 0.25em; color: rgb(84, 89, 93);\">[</span><a href=\"https://en.wikipedia.org/w/index.php?title=CSS&action=edit§ion=1\" title=\"Edit section: Syntax\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; text-wrap: nowrap; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">edit</span></a><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-left: 0.25em; color: rgb(84, 89, 93);\">]</span></span></h2><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">CSS has a simple <a href=\"https://en.wikipedia.org/wiki/Syntax\" title=\"Syntax\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">syntax</a> and uses a number of English keywords to specify the names of various style properties.</p><h3 style=\"font-weight: bold; margin: 0.25em 0px; padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-size: 1.2em; line-height: 1.6; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-headline\" id=\"Style_sheet\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Style sheet</span><span class=\"mw-editsection\" style=\"user-select: none; font-size: small; font-weight: normal; margin-left: 1em; vertical-align: baseline; line-height: 0; unicode-bidi: isolate; margin-right: 0px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-right: 0.25em; color: rgb(84, 89, 93);\">[</span><a href=\"https://en.wikipedia.org/w/index.php?title=CSS&action=edit§ion=2\" title=\"Edit section: Style sheet\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; text-wrap: nowrap; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">edit</span></a><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-left: 0.25em; color: rgb(84, 89, 93);\">]</span></span></h3><div role=\"note\" class=\"hatnote navigation-not-searchable\" style=\"font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Main article: <a href=\"https://en.wikipedia.org/wiki/Style_sheet_(web_development)\" title=\"Style sheet (web development)\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Style sheet (web development)</a></div><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">A style sheet consists of a list of <i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">rules</i>. Each rule or rule-set consists of one or more <i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/CSS#Selector\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">selectors</a></i>, and a <i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/CSS#Declaration_block\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">declaration block</a></i>.</p><h3 style=\"font-weight: bold; margin: 0.25em 0px; padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-size: 1.2em; line-height: 1.6; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-headline\" id=\"Selector\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Selector</span><span class=\"mw-editsection\" style=\"user-select: none; font-size: small; font-weight: normal; margin-left: 1em; vertical-align: baseline; line-height: 0; unicode-bidi: isolate; margin-right: 0px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-right: 0.25em; color: rgb(84, 89, 93);\">[</span><a href=\"https://en.wikipedia.org/w/index.php?title=CSS&action=edit§ion=3\" title=\"Edit section: Selector\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; text-wrap: nowrap; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">edit</span></a><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-left: 0.25em; color: rgb(84, 89, 93);\">]</span></span></h3><div role=\"note\" class=\"hatnote navigation-not-searchable\" style=\"font-style: italic; padding-left: 1.6em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">\"CSS class\" redirects here. For non-CSS use of element classes in HTML, see <a href=\"https://en.wikipedia.org/wiki/Class_attribute_(HTML)\" class=\"mw-redirect\" title=\"Class attribute (HTML)\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">class attribute (HTML)</a>.</div><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">In CSS, <i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">selectors</i> declare which part of the markup a style applies to by matching tags and attributes in the markup itself.</p><h4 style=\"font-weight: bold; margin: 0.25em 0px; padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-size: 14px; line-height: 1.6; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-headline\" id=\"Selector_types\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Selector types</span><span class=\"mw-editsection\" style=\"user-select: none; font-size: small; font-weight: normal; margin-left: 1em; vertical-align: baseline; line-height: 0; unicode-bidi: isolate; margin-right: 0px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-right: 0.25em; color: rgb(84, 89, 93);\">[</span><a href=\"https://en.wikipedia.org/w/index.php?title=CSS&action=edit§ion=4\" title=\"Edit section: Selector types\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; text-wrap: nowrap; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">edit</span></a><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-left: 0.25em; color: rgb(84, 89, 93);\">]</span></span></h4><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Selectors may apply to the following:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 1.6em; padding: 0px; list-style-image: url(\"/w/skins/Vector/resources/skins.vector.styles/images/bullet-icon.svg?d4515\"); color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><li style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-bottom: 0.1em;\">all <a href=\"https://en.wikipedia.org/wiki/HTML_element\" title=\"HTML element\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">elements</a> of a specific type, e.g. the second-level headers <a href=\"https://en.wikipedia.org/wiki/HTML_element#Basic_text\" title=\"HTML element\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">h2</a></li><li style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-bottom: 0.1em;\">elements specified by <a href=\"https://en.wikipedia.org/wiki/HTML_attribute\" title=\"HTML attribute\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">attribute</a>, in particular:<ul style=\"margin-right: 0px; margin-left: 1.6em; padding: 0px; list-style-image: url(\"/w/skins/Vector/resources/skins.vector.styles/images/bullet-icon.svg?d4515\"); animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><li style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-bottom: 0.1em;\"><i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">id</i>: an identifier unique within the document, denoted in the selector language by a <a href=\"https://en.wikipedia.org/wiki/Number_sign\" title=\"Number sign\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">hash</a> prefix e.g. <code class=\"mw-highlight mw-highlight-lang-text mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\">#id</code></li><li style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-bottom: 0.1em;\"><i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">class</i>: an identifier that can annotate multiple elements in a document, denoted by a <a href=\"https://en.wikipedia.org/wiki/Period_(punctuation)\" class=\"mw-redirect\" title=\"Period (punctuation)\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">dot</a> prefix e.g. <code class=\"mw-highlight mw-highlight-lang-text mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\">.classname</code> (the phrase \"CSS class\", although sometimes used, is a misnomer, as element classes—specified with the <a href=\"https://en.wikipedia.org/wiki/Class_attribute_(HTML)\" class=\"mw-redirect\" title=\"Class attribute (HTML)\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">HTML class attribute</a>—is a markup feature that is distinct from browsers\' CSS subsystem and the related W3C/WHATWG standards work on document styles; see <a href=\"https://en.wikipedia.org/wiki/Resource_Description_Framework\" title=\"Resource Description Framework\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">RDF</a> and <a href=\"https://en.wikipedia.org/wiki/Microformat\" title=\"Microformat\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">microformats</a> for the origins of the \"class\" system of the Web content model)</li></ul></li><li style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-bottom: 0.1em;\">elements depending on how they are placed relative to others in the <a href=\"https://en.wikipedia.org/wiki/Document_Object_Model\" title=\"Document Object Model\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">document tree</a>.</li></ul><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Classes and IDs are case-sensitive, start with letters, and can include alphanumeric characters, hyphens, and underscores. A class may apply to any number of instances of any element. An ID may only be applied to a single element.</p><h4 style=\"font-weight: bold; margin: 0.25em 0px; padding-top: 0.5em; padding-bottom: 0px; overflow: hidden; font-size: 14px; line-height: 1.6; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-headline\" id=\"Pseudo-classes\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Pseudo-classes</span><span class=\"mw-editsection\" style=\"user-select: none; font-size: small; font-weight: normal; margin-left: 1em; vertical-align: baseline; line-height: 0; unicode-bidi: isolate; margin-right: 0px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-right: 0.25em; color: rgb(84, 89, 93);\">[</span><a href=\"https://en.wikipedia.org/w/index.php?title=CSS&action=edit§ion=5\" title=\"Edit section: Pseudo-classes\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; text-wrap: nowrap; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><span style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">edit</span></a><span class=\"mw-editsection-bracket\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; margin-left: 0.25em; color: rgb(84, 89, 93);\">]</span></span></h4><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">Pseudo-classes</i> are used in CSS selectors to permit formatting based on information that is not contained in the document tree.</p><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">One example of a widely used pseudo-class is <code class=\"mw-highlight mw-highlight-lang-css mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\"><span class=\"p\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">:</span><span class=\"nd\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(170, 34, 255);\">hover</span></code>, which identifies content only when the user \"points to\" the visible element, usually by holding the mouse cursor over it. It is appended to a selector as in <code class=\"mw-highlight mw-highlight-lang-css mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\"><span class=\"nt\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(0, 128, 0); font-weight: bold;\">a</span><span class=\"p\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">:</span><span class=\"nd\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(170, 34, 255);\">hover</span></code> or <code class=\"mw-highlight mw-highlight-lang-css mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\"><span class=\"p\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">#</span><span class=\"nn\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(0, 0, 255); font-weight: bold;\">elementid</span><span class=\"p\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">:</span><span class=\"nd\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(170, 34, 255);\">hover</span></code>.</p><p style=\"margin: 0.5em 0px 0px; padding-bottom: 0.5em; color: rgb(32, 33, 34); font-size: 14px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">A pseudo-class classifies document elements, such as <code class=\"mw-highlight mw-highlight-lang-css mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\"><span class=\"p\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">:</span><span class=\"nd\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(170, 34, 255);\">link</span></code> or <code class=\"mw-highlight mw-highlight-lang-css mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\"><span class=\"p\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">:</span><span class=\"nd\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(170, 34, 255);\">visited</span></code>, whereas a <i style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">pseudo-element</i> makes a selection that may consist of partial elements, such as <code class=\"mw-highlight mw-highlight-lang-css mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\"><span class=\"p\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">::</span><span class=\"nd\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(170, 34, 255);\">first-line</span></code> or <code class=\"mw-highlight mw-highlight-lang-css mw-content-ltr\" id=\"\" dir=\"ltr\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; font-family: monospace, monospace; background: rgb(248, 248, 248); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); border-radius: 2px; padding: 1px 4px; unicode-bidi: embed;\"><span class=\"p\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">::</span><span class=\"nd\" style=\"animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important; color: rgb(170, 34, 255);\">first-letter</span></code>.<sup id=\"cite_ref-6\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; text-wrap: nowrap; font-size: 11.2px; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\"><a href=\"https://en.wikipedia.org/wiki/CSS#cite_note-6\" style=\"text-decoration: none; color: rgb(51, 102, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; overflow-wrap: break-word; animation-delay: -0.01ms !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; scroll-behavior: auto !important; transition-duration: 0ms !important;\">[6]</a></sup> Note the distinction between the double-colon notation u</p> ', '2024-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `navbar_status` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`) VALUES
(1, 'HTML', 'html-tutorial', 'Nigga', 'asdasd', ' sadsad', ' asdad', 0, 0, '2024-02-05 06:08:47'),
(3, 'PHP', 'php', 'php ', 'php', 'php ', 'php ', 0, 0, '2024-02-06 05:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`) VALUES
(1, 'College of Computer Studies'),
(2, 'College of Nursing'),
(3, 'College of Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `college_name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `college_id`, `college_name`) VALUES
(1, 'Information Technology', 1, 'College of Computer Studies'),
(2, 'Computer Science', 1, 'College of Computer Studies'),
(3, 'Electrical Engineering', 3, ''),
(4, 'Information Systems', 1, 'College of Computer Studies');

-- --------------------------------------------------------

--
-- Table structure for table `drive_files`
--

CREATE TABLE `drive_files` (
  `id` int(11) NOT NULL,
  `google_drive_file_id` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `mime_type` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drive_files`
--

INSERT INTO `drive_files` (`id`, `google_drive_file_id`, `file_name`, `mime_type`, `created`) VALUES
(1, '10pihoEI5L7McHi1OgD9It1YsJXuNtXS2', 'DATA DICTIONARY DRAFT.xlsx', 'application/vnd.openxmlformats-officedocument.spre', '2024-02-27 14:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '0-Faculty\r\n1-Coordinator\r\n2-Department_Head\r\n3-Dean',
  `image` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `lname`, `email`, `college_id`, `department_id`, `role`, `image`) VALUES
(1, 'testName', 'testLname', 'testemail@gmail.com', 3, 3, 1, '1707547627.'),
(5, 'test', 'Faculty', 'Faculty@gmail.com', 1, 2, 0, '1707547639.'),
(7, 'Vinni', 'Uba', 'vinniuba1@gmail.com', 0, 0, 0, '1707493975.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `contact_person` varchar(191) NOT NULL,
  `designation` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `contact_number` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `address`, `contact_person`, `designation`, `email`, `contact_number`) VALUES
(1, 'Test Partner', 'Test Address', 'Test Contact Person', 'Captain President', 'test@gmail.com', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(1, 1, 'HTML CRUD 2', 'HTML CRUD', '     HTML IS COOL    ', '1707222078.png', 'HTML IS COOL', '  HTML IS COOL', '  HTML IS COOL    ', 0, '2024-02-05 14:32:14'),
(9, 3, 'PHP TEST', 'PHP', 'PHP ', '1707202674.png', 'PHP', 'PHP ', 'PHP ', 0, '2024-02-06 06:57:54'),
(12, 3, 'a', 'a', 'a ', '1707493554.png', 'a', ' a', ' a', 0, '2024-02-09 15:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(191) NOT NULL,
  `subject_hosted` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sd_coordinator_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `school_year_id` int(11) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-in Progress\r\n1-Finished\r\n2-TBD\r\n3-Cancelled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `type`, `subject_hosted`, `college_id`, `department_id`, `sd_coordinator_id`, `partner_id`, `school_year_id`, `semester`, `status`) VALUES
(1, 'Test Project', 'Test Description', 'Test Type', 'ITCC', 1, 1, 1, 1, 1, 2, 0),
(2, 'Test Project 2', 'Test Type 2', 'Test Type 2', 'CSCC', 0, 0, 0, 0, 1, 2, 0),
(3, 'Test Project 3', 'Test Type 3', 'Test Type 3', 'CSCC', 0, 0, 0, 0, 2, 2, 0),
(4, 'Test Project 4', 'Test 4', 'Test Type 3', 'ENGE 1', 3, 3, 1, 1, 2, 2, 1),
(27, 'NEW PROJECT', 'THIS IS A NEW RESEARCH PROJECT', 'RESEARCH', 'ITCC 69', 1, 1, 1, 1, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_documents`
--

CREATE TABLE `project_documents` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(191) NOT NULL,
  `file_size` varchar(191) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_documents`
--

INSERT INTO `project_documents` (`id`, `project_id`, `file_name`, `file_type`, `file_size`, `file_path`) VALUES
(10, 27, 'Eye Texture.png', 'image/png', '25979', '../uploads/project_documents/Eye Texture.png');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `id` int(11) NOT NULL,
  `school_year` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`id`, `school_year`) VALUES
(1, '2023-2024'),
(2, '2022-2023'),
(3, '2021-2022'),
(4, '2020-2021'),
(5, '2019-2020'),
(6, '2018-2019'),
(7, '2017-2018'),
(8, '2016-2017'),
(9, '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `year_level` tinyint(1) NOT NULL,
  `student_number` varchar(191) NOT NULL,
  `project_id` int(11) NOT NULL COMMENT 'To know what project they were on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `college_id`, `department_id`, `year_level`, `student_number`, `project_id`) VALUES
(1, 'Johnny', 'Test', 1, 2, 3, '1', 1),
(2, 'Test', 'Subject', 1, 1, 4, '00000000001', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(1, 'Vinni', 'Uba', 'vinniuba1@gmail.com', '1234', 1, 1, '2024-02-04 07:38:18'),
(2, 'users', 'user', 'user@gmail.com', 'user', 0, 0, '2024-02-04 08:15:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drive_files`
--
ALTER TABLE `drive_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_documents`
--
ALTER TABLE `project_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drive_files`
--
ALTER TABLE `drive_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `project_documents`
--
ALTER TABLE `project_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_documents`
--
ALTER TABLE `project_documents`
  ADD CONSTRAINT `project_documents_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
