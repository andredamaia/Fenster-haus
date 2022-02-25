<div class="sobre-nos">
    <img src="<?php echo $pageurl; ?>/public/images/bg-sobre-nos.jpg" class="bg-sobre" alt="" />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 text-center">
                <strong>FALE CONOSCO</strong>

                <form action="https://formsubmit.co/your@email.com" method="POST" class="form-contato">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="text" name="_honey" style="display:none">
                    
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="name" placeholder="Nome" required />
                        </div>

                        <div class="col-12 col-md-6">
                            <input type="email" name="email" placeholder="E-mail" required />
                        </div>

                        <div class="col-12 col-md-6">
                            <input type="text" id="phone" placeholder="Telefone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                        </div>

                        <div class="col-12">
                            <textarea name="mensagem" id="mensagem" cols="30" rows="5" placeholder="Mensagem"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.4806633888!2d-48.880034484401016!3d-26.31093087471203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deb00ad129ed03%3A0xaef06a84ef74b7c5!2sR.%20Vit%C3%B3ria-R%C3%A9gia%2C%2035%20-%20S%C3%A3o%20Marcos%2C%20Joinville%20-%20SC%2C%2089214-360!5e0!3m2!1spt-BR!2sbr!4v1645720339675!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>