@include('layouts.master')
<div class="container">
  <h2>Remplir les information de votre stiagires</h2>
  <form>
    <div class="mb-3">
      <label for="nom" class="form-label">Nom de stagiaire:</label>
      <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Nom de l'entreprise:</label>
      <input type="email" class="form-control" id="nom" placeholder="Entrez votre email" name="email">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Nom de titure:</label>
      <input class="form-control" id="message" placeholder="Entrez votre message" name="message">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Email titure:</label>
      <input class="form-control" id="message" placeholder="Entrez votre message" name="message">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">numero titure:</label>
      <input class="form-control" id="message" placeholder="Entrez votre message" name="message">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Email titure:</label>
      <input class="form-control" id="message" placeholder="Entrez votre message" name="message">
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Observation:</label>
      <textarea class="form-control" id="message" placeholder="Entrez votre message" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>

<!-- Inclure le fichier JavaScript de Bootstrap 5 (facultatif) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>