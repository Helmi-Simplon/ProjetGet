<!-- Etape 3 : A afficher uniquement une fois que l\'étape 2 a été résolue -->
<h2>Question 3</h2>
<p>L'agent a-t-il résolu votre problème ?</p>
<a href="?step=5&result=<?= (1 + $_GET["result"]) ?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
<a href="?step=4&result=<?= (-1 + $_GET["result"]) ?>" role="button" class="btn btn-danger">non</a> <!-- rapporte -1 point -->