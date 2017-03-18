<?php ?>

<style>
body{
	background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
  font-family: helvetica,Arial;
}
	.docs-header {

    padding-top: 50px;
    border-top: 1px solid #50c1e9;
    background: url(<?php echo base_url('images/wild_flowers.png');?>) repeat 0 0;
}

.navbar-custom {
    position: fixed;
    top: 0;
    left: 0;
    border: none;
    border-radius: 0;
    background-color: rgba(255,255,255,.9);
    width: 100%;
    z-index: 2000;
}
.topic {
    position: relative;
    padding: 50px 0 100px;
}

.topic h3 {
    margin-top: 20px;
    color: #fff;
    font-size: 36px;
    font-weight: 400;
    text-align: center;
}
.topic h4 {
    margin-top: 15px;
    color: rgba(255,255,255,.8);
    font-weight: 400;
    text-align: center;
}
.topic__infos {
    position: absolute;
    bottom: 0;
    padding-bottom: 15px;
    padding-top: 14px;
    background: rgba(255,255,255,.25);
    width: 100%;
    text-align: center;
}
.topic__infos p {
	color: #fff;
	text-align: center;
	margin: 0;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    font-family: Roboto,sans-serif,Arial;
    font-weight: 500;
}
.h3, h3 {
    font-size: 30px;
}
h1, h2, h3 {
    margin-top: 30px;
    margin-bottom: 15px;
}
h2.catalog-title{
  font-family: Roboto, sans-serif;
  font-weight: 300;
}
.thumbnail{
	position: relative;
}
.thumbnail .caption .action{
	padding-top: 9px;
	border-top:1px solid #ddd;
}

.thumbnail .caption .description{
text-align: justify-all;
line-height: 85%;
}
.thumbnail .caption h3.book-title{
margin-bottom: 2px;
text-align: center;
font-weight: 350;
}

.thumbnail .caption p.author{
margin-top: 0px;
margin-bottom: 10px;
color: #777;
text-align: center;
}
.category-000-label{
  background-image: linear-gradient(200deg, #5f72bd 0%, #9b23ea 100%);
}
.category-100-label{
  background-image: linear-gradient(20deg, #6e45e2 0%, #88d3ce 100%);
}
.category-200-label{
  background-image: linear-gradient(225deg, #2CD8D5 0%, #6B8DD6 48%, #8E37D7 100%);
}
.category-300-label{
  background-image: linear-gradient(20deg, #ec77ab 0%, #7873f5 100%);
}
.category-400-label{
  background-image: linear-gradient(20deg, #007adf 0%, #00ecbc 100%);
}
.category-500-label{
	
  background-image: linear-gradient(to left, #2af598 0%, #009efd 100%);
}
 .category-600-label{
  
  background-image: linear-gradient(to left, #0acffe 0%, #495aff 100%);
  
}
 .category-700-label{
background-image: linear-gradient(to left, #FFE29F 0%, #FFA99F 48%, #FF719A 100%);
}
.category-800-label{
background-image: linear-gradient(-20deg, #5ee7df 0%, #b490ca 100%);;
}

.category .category-text{
  padding: 4px;
  color:#fff;
  font-family: helvetica,Arial;
}


.thumbnail .category .label{
	margin-left: 3px;
}

.home-search{
	padding-top: 10px;
	padding-bottom: 10px;
}

.category-list{
  background-color: #fff;
  margin-top: 25px;
  padding-top: 25px;
  border-top: 1px solid #eee;
}
.title-container{
  margin-bottom: 10px;
  border-radius: 4px;
}
.catalog-item-title{
  padding: 10px 10px;
  color: #fff;
  font-family: Roboto, sans-serif;
  font-weight: 300;
  font-size: 120%;
  display:flex;
  align-items:center;
  height:60px;
}
.lib-number{
  font-size: 72px
}
.lib-content{
  font-size: 36px;
}
</style>