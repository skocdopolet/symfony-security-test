# Symfony security test

This repository has three branches. These branches have different authenticator providers.

## Branches
1. main: both authenticators Entity and LDAP and chain provider. First item in chain is Entity, second is LDAP
2. Only-Entity: only Entity authenticator provider
3. Only-LDAP: only LDAP authenticator provider

### I try this scenarios in main branch:
1. Authenticate with non existent user in both providers - OK
2. Authenticate with user from entity and give bad password - OK
3. Authenticate with user from entity and give good password - OK
4. Authenticate with user from LDAP and give good password - THIS IS WRONG!!

### I try this screnarios in Only-Entity branch:
5. Authenticate with user from entity and give bad password - OK
6. Authenticate with user from entity and give good password - OK

### I try this screnarios in Only-Entity branch:
7. Authenticate with user from LDAP and give bad password - OK
8. Authenticate with user from LDAP and give good password - OK

## Messages from profiller
### Case 1
![branch-main--auth-failure--nonexistent-user](https://user-images.githubusercontent.com/31281805/161263591-cd72e753-7394-4ed8-b23f-15f4af7a3d88.png)

### Case 2
![branch-main--entity-user--auth-failure--bad-password](https://user-images.githubusercontent.com/31281805/161263599-cc0eb25f-9b1f-4934-896f-56d8d4b820f5.png)

### Case 3
![branch-main--entity-user--auth-success](https://user-images.githubusercontent.com/31281805/161263602-d9f6f3b1-97bb-4c6b-aedf-f980d43ddff7.png)

### Case 4
![branch-main--ldap-user--auth-failure--good-password](https://user-images.githubusercontent.com/31281805/161263605-99af2a22-0324-489e-b8b1-1504677bb453.png)

### Case 5
![branch-only-entity--entity-user--auth-failure--bad-password](https://user-images.githubusercontent.com/31281805/161263609-1f21fc31-c53f-44e9-8d27-caced3faf37a.png)

### Case 6
![branch-only-entity--entity-user--auth-success](https://user-images.githubusercontent.com/31281805/161263617-c71f3333-a713-4567-81ad-63f6911096a1.png)

### Case 7
![branch-only-ldap--ldap-user--auth-failure--bad-password](https://user-images.githubusercontent.com/31281805/161263621-da18c81c-2a9d-48ad-b88d-7037e04cc802.png)

### Case 8
![branch-only-ldap--ldap-user--auth-success](https://user-images.githubusercontent.com/31281805/161263625-1084ea6b-c230-45b1-a3dd-3ea63b94feb6.png)
