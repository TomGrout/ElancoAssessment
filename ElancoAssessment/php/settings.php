<?php include ("NavBar.php");?>


<head>
<link rel='stylesheet' href='../css/style.css'/>
<style>
    /* logout button */
.Btn {
    --black: #000000;
    --ch-black: #141414;
    --eer-black: #1b1b1b;
    --night-rider: #2e2e2e;
    --white: #ffffff;
    --af-white: #f3f3f3;
    --ch-white: #e1e1e1;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition-duration: .3s;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
    background-color: var(--night-rider);
  }
  
  /* plus sign */
  .sign {
    width: 100%;
    transition-duration: .3s;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .sign svg {
    width: 17px;
  }
  
  .sign svg path {
    fill: var(--af-white);
  }
  /* text */
  .text {
    position: absolute;
    right: -5%;
    width: 0%;
    opacity: 0;
    color: var(--af-white);
    font-size: 1.2em;
    font-weight: 600;
    transition-duration: .3s;
  }
  /* hover effect on button width */
  .Btn:hover {
    width: 125px;
    border-radius: 5px;
    transition-duration: .3s;
  }
  
  .Btn:hover .sign {
    width: 30%;
    transition-duration: .3s;
    padding-left: 20px;
  }
  /* hover effect button's text */
  .Btn:hover .text {
    opacity: 1;
    width: 70%;
    transition-duration: .3s;
    padding-right: 10px;
  }
  /* button click effect*/
  .Btn:active {
    transform: translate(2px ,2px);
  }
  #logout-footer{
      position: fixed;
      bottom: 0;
      width: 100%;
      margin: 10px;
  }
</style>
</head>

<body>
<div style="margin: 10px;">
<div>
    <h2><u>Your Details</u></h2>
    <h3>Name: Admin</h3>
    <h3>Email: Admin@gmail.com</h3>
    <br><br>
</div>

<div id="logout-footer">
<a href = "logout.php">
    <button class="Btn">
    
    <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
        <div class="text">Logout</div>
    </button>
</a>
</div>

</body>
