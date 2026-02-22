<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PinasCO AutoPatch</title>

<style>

/* ===== BODY ===== */
body{
margin:0;
background:#020617;
font-family:Arial;
overflow:hidden;
}

/* ===== WRAPPER ===== */
.wrapper{
width:100%;
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

/* ===== PANEL ===== */
.panel{
width:420px;
height:300px;
background:#020617;
border:1px solid #1f2933;
border-radius:12px;
padding:15px;
box-shadow:0 0 25px rgba(0,0,0,0.7);
}

/* ===== HEADER ===== */
.header{
color:white;
font-size:18px;
font-weight:bold;
margin-bottom:10px;
}

/* ===== NEWS TICKER ===== */
.ticker{
height:20px;
overflow:hidden;
color:#22c55e;
font-size:12px;
margin-bottom:10px;
position:relative;
}

.ticker span{
position:absolute;
white-space:nowrap;
animation:slide 12s linear infinite;
}

@keyframes slide{
0%{ left:100%; }
100%{ left:-100%; }
}

/* ===== LIST ===== */
.announcement-list{
height:210px;
overflow-y:auto;
background:#010409;
border-radius:8px;
padding:10px;
}

/* SCROLLBAR (modern browser only, ignored by autopatch if unsupported) */
.announcement-list::-webkit-scrollbar{
width:6px;
}

.announcement-list::-webkit-scrollbar-thumb{
background:#22c55e;
border-radius:3px;
}

/* ===== ITEM ===== */
.announcement-item{
color:#e5e7eb;
font-size:13px;
padding:6px;
border-bottom:1px solid #1f2933;
transition:0.2s;
}

.announcement-item:hover{
background:#020617;
transform:translateX(3px);
}

/* NEWEST UPDATE HIGHLIGHT */
.new{
color:#22c55e;
font-weight:bold;
}

.date{
color:#60a5fa;
font-weight:bold;
}

</style>
</head>

<body>

<div class="wrapper">

<div class="panel">

<div class="header">PinasCO Latest Updates</div>

<div class="ticker">
<span>🔥 Welcome back warriors! Classic PvP is LIVE — Join the battlefield now!</span>
</div>

<div class="announcement-list">

<div class="announcement-item new">
<span class="date">[03-1-2026]</span> Update 1001 : Server Officially Launched! 🎉
</div>

</div>

</div>

</div>

</body>
</html>