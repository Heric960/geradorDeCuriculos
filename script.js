let escolaridadeCounter = 1;
let experienciaCounter = 1;

function addEscolaridade() {
    escolaridadeCounter++;
    const newEscolaridade = document.createElement('div');
    newEscolaridade.classList.add('escolaridade');
    newEscolaridade.id = `escolaridade${escolaridadeCounter}`;
    newEscolaridade.innerHTML = `
        <label for="entidade${escolaridadeCounter}">Entidade</label>
        <input type="text" id="entidade${escolaridadeCounter}" placeholder="Entidade de ensino"><br>
        
        <label for="curso${escolaridadeCounter}">Curso</label>
        <input type="text" id="curso${escolaridadeCounter}" placeholder="Nome do curso"><br>
        
        <label for="escolaridade${escolaridadeCounter}">Selecione o nível de escolaridade</label>
        <select id="escolaridade${escolaridadeCounter}">
            <option value="" selected disabled>Selecione...</option>
            <option value="fundamental_incompleto">Ensino Fundamental Incompleto</option>
            <option value="fundamental_completo">Ensino Fundamental Completo</option>
            <option value="medio_incompleto">Ensino Médio Incompleto</option>
            <option value="medio_completo">Ensino Médio Completo</option>
            <option value="tecnico">Curso Técnico</option>
            <option value="superior_incompleto">Ensino Superior Incompleto</option>
            <option value="superior_completo">Ensino Superior Completo</option>
            <option value="pos_graduacao">Pós-Graduação</option>
            <option value="mestrado">Mestrado</option>
            <option value="doutorado">Doutorado</option>
        </select><br>
        
        <label for="dataEscIni${escolaridadeCounter}">Data de início</label>
        <input type="date" id="dataEscIni${escolaridadeCounter}"><br>
        
        <label for="dataEscCon${escolaridadeCounter}">Data de conclusão</label>
        <input type="date" id="dataEscCon${escolaridadeCounter}"><br>
    `;
    document.getElementById('escolaridade-container').appendChild(newEscolaridade);
}

function addExperiencia() {
    experienciaCounter++;
    const newExperiencia = document.createElement('div');
    newExperiencia.classList.add('experiencia');
    newExperiencia.id = `experiencia${experienciaCounter}`;
    newExperiencia.innerHTML = `
        <label for="empresa${experienciaCounter}">Empresa</label>
        <input type="text" id="empresa${experienciaCounter}" placeholder="Nome da Empresa"><br>
        
        <label for="cargo${experienciaCounter}">Cargo</label>
        <input type="text" id="cargo${experienciaCounter}" placeholder="Nome do cargo"><br>
        
        <label for="dataExpIni${experienciaCounter}">Data de início</label>
        <input type="date" id="dataExpIni${experienciaCounter}"><br>
        
        <label for="dataExpCon${experienciaCounter}">Data de conclusão</label>
        <input type="date" id="dataExpCon${experienciaCounter}"><br>
    `;
    document.getElementById('experiencia-container').appendChild(newExperiencia);
}
