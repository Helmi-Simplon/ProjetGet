<!-- Etape finale : A afficher si "oui" a été répondu à la question 3 ou si l\'étape 4bis a été résolue -->
<h2>Question 4</h2>
<p>Le problème a-t-il été résolu ?</p>
<a href="?step=5&result=<?= (2 + $_GET["result"]) ?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
<a href="?step=5&result=<?= (0 + $_GET["result"]) ?>&btn=<?= $_GET["btn"] ?>" role="button" class="btn btn-danger">non</a> <!-- rapporte -1 point -->