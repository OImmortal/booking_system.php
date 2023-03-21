<div class="padding-150">
<h2>Top avaliados</h2>
    <div class="avaliados">
        <?php 
            for($i = 0;$i < 3;$i++) {
        ?>
        <div class="container-hotel">
            <div class="info">
                <h3>Nome local</h3>
                <h4>&starf; &starf; &starf; &starf; &star;</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, adipisci?</p>
                <a href="">Ver Mais</a>
            </div>
        </div>
        <?php } ?>
        <a href="">
            <div class="see-more">                
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </a>
    </div>
    <div class="offers">
        <h3>Ofertas Especiais</h3>
       
        <div class="page-offers">
        <?php
            for($i = 0;$i < 2;$i++) {
        ?>
            <div class="info">
                <h4>Hoteis com desconto em locias Famosos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, perferendis?</p>
                <a href="">Saiba mais</a>
            </div>
        <?php } ?>
        </div>
    </div>
    <div class="all">
        <div class="header">
            <h2>Mais Relevantes</h2>
            <form action="" method="post">
                <select name="" id="">
                    <option value="">Mais Relevantes</option>
                    <option value="">Mais Bem Avaliados</option>
                    <option value="">Maior Preço</option>
                    <option value="">Menor Preço</option>
                </select>
            </form>
        </div>
        <?php
            for($i = 0;$i < 4;$i++) {
        ?>
        <div class="hotels-info">
            <div class="img">
                <img src="./libs/images/imagem-hotel1.jpeg" alt="">
            </div>
            <div class="infos">
                <h1>Nome do Hotel</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At assumenda recusandae vitae velit, enim harum?</p>
                <p>&starf; &starf; &starf; &starf; &starf;</p>
                <p>R$33 - R$123</p>
                <a href="">Ver Mais</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>