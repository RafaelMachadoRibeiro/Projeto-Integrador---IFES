<?php 
require_once 'templates/header.php';

?>
<link rel="stylesheet" href="css/arquivo.css">
<div class="container">
        <aside class="sidebar" id="sidebar">
            <!-- Botões dinâmicos serão adicionados aqui -->
            <button id="addSidebarButton" class="add-sidebar-btn">Adicionar Pasta</button>
            <button id="removeSidebarButton" class="remove-sidebar-btn">Excluir Pasta</button>
        </aside>
        <main class="content" id="content">
            <!-- Pastas dinâmicas serão adicionadas aqui -->
        </main>
    </div>
    <div class="action-buttons">
        <button id="add" class="btn-action"><img src="img/add.png" alt="Adicionar"></button>
    </div>
    <!-- Formulário para upload de arquivo -->
    <form id="uploadForm" style="display: none;">
        <input type="file" id="fileInput">
        <button type="submit">Upload</button>
    </form>
    <script src="js/arquivo.js"></script>


<?php 
require_once 'templates/footer.php';


?>
