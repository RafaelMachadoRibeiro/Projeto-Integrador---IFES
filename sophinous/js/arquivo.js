document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.getElementById('sidebar');
    const addSidebarButton = document.getElementById('addSidebarButton');
    const removeSidebarButton = document.getElementById('removeSidebarButton');
    const folderContainers = document.querySelector('.content');
    let activeSidebarButton = null;

    // Função para adicionar novo botão na barra lateral
    addSidebarButton.addEventListener('click', function() {
        const folderName = prompt("Digite o nome da nova pasta:");
       
        if (folderName) {
            const buttonId = folderName.replace(/\s+/g, '') + 'Button';
            const folderId = folderName.replace(/\s+/g, '') + 'Folder';

            // Criar novo botão na barra lateral
            const newButton = document.createElement('button');
            newButton.id = buttonId;
            newButton.textContent = folderName;
            sidebar.insertBefore(newButton, addSidebarButton);

            // Criar nova pasta correspondente
            const newFolder = document.createElement('div');
            newFolder.id = folderId;
            newFolder.className = 'folder-container';
            newFolder.style.display = 'none';
            folderContainers.appendChild(newFolder);

            // Adicionar event listener para o novo botão
            newButton.addEventListener('click', function() {
                setActiveButton(newButton);
                showFolder(newFolder);
            });
        }
    });

    // Função para remover o botão ativo na barra lateral e sua pasta correspondente
    removeSidebarButton.addEventListener('click', function() {
        if (activeSidebarButton) {
            const folderId = activeSidebarButton.id.replace('Button', 'Folder');
            const folder = document.getElementById(folderId);
            folder.remove();
            activeSidebarButton.remove();
            activeSidebarButton = null;
        }
    });

    const addButton = document.getElementById('add');
    const fileInput = document.getElementById('fileInput');

    addButton.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', handleFileUpload);

    function handleFileUpload() {
        const file = fileInput.files[0];
        const activeFolder = document.querySelector('.folder-container.active');

        if (file && activeFolder) {
            const folderDiv = document.createElement('div');
            folderDiv.className = 'folder';
            
            const link = document.createElement('a');
            link.href = URL.createObjectURL(file);
            link.target = '_blank';
            
            const img = document.createElement('img');
            img.src = 'img/pasta.png';
            img.alt = 'Pasta';
            
            const span = document.createElement('span');
            span.textContent = file.name;

            const deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'Excluir';
            deleteBtn.className = 'delete-btn';
            deleteBtn.addEventListener('click', () => {
                folderDiv.remove();
            });
            
            link.appendChild(img);
            folderDiv.appendChild(link);
            folderDiv.appendChild(span);
            folderDiv.appendChild(deleteBtn);
            activeFolder.appendChild(folderDiv);
            
            // Clear the file input
            fileInput.value = '';
        }
    }

    function setActiveButton(button) {
        document.querySelectorAll('.sidebar button').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        activeSidebarButton = button;
    }

    function showFolder(folder) {
        document.querySelectorAll('.folder-container').forEach(fld => {
            fld.classList.remove('active');
            fld.style.display = 'none';
        });
        folder.classList.add('active');
        folder.style.display = 'flex';
    }
});
