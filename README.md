# SGQ Manager

Sistema simplificado para Gestão de Qualidade, focado em conformidade, controle documental e melhoria de processos, sem módulos de estoque ou vendas.

## Funcionalidades Principais

* **Gestão de Documentos:** Controle de POPs, Manuais e Instruções com histórico de revisões e controle de status (Rascunho -> Revisão -> Aprovado).
* **Não Conformidades (RNC):** Registro de desvios, evidências e análise de causa raiz.
* **Planos de Ação (5W2H):** Planejamento de tarefas corretivas com definição de responsáveis, prazos e custos.
* **Auditorias:** Agendamento de verificações internas e checklists de conformidade.

## Tecnologias

* **Framework:** Laravel 10+
* **Linguagem:** PHP 8.1+ (utilizando Enums Nativos)
* **Banco de Dados:** Relacional (MySQL/PostgreSQL)

## Estrutura do Banco

O sistema é organizado em torno de 4 módulos principais:

1. **Documentação:** `documents`, `document_revisions`.
2. **Qualidade:** `non_conformities`, `root_cause_analyses`.
3. **Ação:** `action_plans` (vinculados ou não a uma RNC).
4. **Auditoria:** `audits`, `audit_items`.

## Instalação Quickstart

1. **Dependências:** `composer install`
2. **Ambiente:** Configurar banco de dados no `.env`
3. **Banco:** `php artisan migrate`
4. **Rodar:** `php artisan serve`

---

**Precisa que eu crie os Enums (`DocumentTypeEnum`, `QualityStatusEnum`, etc.) que foram usados nas migrations para o projeto ficar funcional?**