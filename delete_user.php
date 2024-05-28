<?php 
echo ('<script>
const resposta = prompt("Você realmente deseja apagar esse usuários?");
if (resposta === "Sim") {
    // Executar ação de apagar usuário
    alert("Usuário apagado.");
  } else if (resposta === "Não") {
    // Executar ação de cancelar ação
    alert("Ação cancelada.");
  } else {
    // Executar ação padrão (ou mostrar um erro)
    alert("Resposta inválida. Ação cancelada.");
  }
</script>');

?>