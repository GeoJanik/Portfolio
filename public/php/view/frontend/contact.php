<div class="container">

    <?php $title = 'Projet P5'; ?>


    <h1>Formulaire de contact</h1>
    <div class="separateur">
        <div class="trait"></div>
    </div>


    <form id="contact-form" method="post" action="index.php?action=form" role="form">

        <div class="messages"></div>

        <div class="controls">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_name">Nom *</label>
                        <input id="form_name" type="text" name="secondName" class="form-control"
                            placeholder="Veuillez entrer votre nom *" required="required"
                            data-error="Nom est obligatoire.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_lastname">Prénom *</label>
                        <input id="form_lastname" type="text" name="firstName" class="form-control"
                            placeholder="Veuillez entre votre prénom *" required="required"
                            data-error="Prénom est obligatoire.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control"
                            placeholder="Veuillez entrer votre email *" required="required"
                            data-error="Un email valid est obligatoire.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_need">Veuillez préciser votre besoin *</label>
                        <select id="form_need" name="objectForm" class="form-control" required="required"
                            data-error="Veuillez préciser votre besoin.">
                            <option value=""></option>
                            <option value="Demande de devis">Demande de devis</option>
                            <option value="Demande générale">Demande générale</option>
                            <option value="Demander une facture">Demander une facture</option>
                            <option value="Autre">Autre</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea id="form_message" name="comment" class="form-control" placeholder="Votre Message *"
                            rows="4" required="required" data-error="Veuillez remplir le champ Message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send" value="Envoyer">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">
                        <strong>*</strong> Ces champs sont obligatoires.</p>
                </div>
            </div>
        </div>
    </form>
</div>