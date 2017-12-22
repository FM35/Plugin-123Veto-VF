<?php /*

    Template Name: RDV

*/ ?>

<?php get_header(); ?>



<section id="rdv">

      <form action="mon-formulaire" method="post">
          <h1>Rendez-vous</h1>

        <div class="section">
          <div class="user">
            <input name="nom" id="nom" placeholder="*Nom" required="required"><br />
          </div>
          
          <div class="tel">
            <input name="tel" id="tel" placeholder="*Téléphone" required="required"><br/>
          </div>

          <div class="mail">
            <input name="mail" id="mail" placeholder="*E-mail"><br />
          </div>

          <div class="date">
            <input type="date" name="date" required placeholder="*Date du rendez-vous : "><br>
          </div>

          <div class="animal">
            <input name="*animal" id="animal" placeholder="* Type d'animal"><br />
          </div>

          <p class="asterix">*  Champs obligatoires</p>

        </div> 
        <!-- fin de section1 -->

        <div class="section2">
          <div class="aniname">
            <input name="aniName" id="aniName" placeholder="Nom de l'animal" required="required"><br />
          </div>
          <div class="motif">
              <select>
                <option value="" disabled selected style="display: none;">Motif</option>
                <option>Vaccin</option>
                <option>Médecine</option>
                <option>Chirurgie: stérilisation</option>
                <option>Chirurgie: détartrage</option>
                <option>Autres</option>
              </select>
          </div> 
        
          <div class="message">  
            <textarea id="mess" placeholder="Votre message (facultatif)" class="big"></textarea>
          </div>

          <div class="bouton">
            <button type="submit" class="bouton-un" >Envoyer</button>
            <button type="submit" id="bouton-deux">Effacer</button>
          </div>
          
        </div> <!-- fin de section2 -->
      </form>
  </section>

  <?php get_footer(); ?>
