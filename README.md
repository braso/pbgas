# PBGas - Sistema de Gestão

## Sobre o Projeto
O PBGas é um sistema de gestão desenvolvido para oferecer funcionalidades essenciais para a administração e operação da empresa.

## Pré-requisitos
Antes de rodar o sistema, certifique-se de ter os seguintes requisitos instalados:

- Docker
- Docker Compose
- PHP 8+
- Composer
- PostgreSQL

## Passos para rodar o sistema

1. **Entrar na pasta do projeto**
   ```sh
   cd pbgas
   ```

2. **Subir os containers do Docker**
   ```sh
   docker-compose up --build
   ```

3. **Acessar o container da aplicação**
   ```sh
   docker exec -it pbgas-app bash
   ```

4. **Navegar até a pasta da aplicação dentro do container**
   ```sh
   cd application/
   ```

5. **Executar as migrações do banco de dados**
   ```sh
   php artisan migrate
   ```

6. **Acessar o sistema via navegador**
   ```
   http://localhost:8000/
   ```

## Comandos Úteis

- **Parar os containers**
  ```sh
  docker-compose down
  ```
- **Reiniciar os containers**
  ```sh
  docker-compose restart
  ```
- **Limpar cache da aplicação**
  ```sh
  php artisan cache:clear
  ```

## Contribuição
Caso deseje contribuir para o projeto, siga as boas práticas de desenvolvimento e abra um Pull Request.

## Licença
Este projeto está sob a licença MIT.

