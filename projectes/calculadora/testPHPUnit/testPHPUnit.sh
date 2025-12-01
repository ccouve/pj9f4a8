#!/bin/bash

# ---------------------------------------------
#  DETECTAR AUTOMÀTICAMENT TOTS ELS CONTENIDORS "calculadora-sCalculadora"
# ---------------------------------------------
containers=$(docker ps --format '{{.Names}}' | grep '^calculadora-sCalculadora')

if [ -z "$containers" ]; then
    echo "❌ No s'han trobat contenidors amb el patró: calculadora-sCalculadora"
    exit 1
fi

echo "S'han trobat els següents contenidors:"
echo "$containers"
echo ""

# ---------------------------------------------
# CONFIGURACIÓ DE LA PROVA
# ---------------------------------------------
TEST_COMMAND="php ./vendor/phpunit/phpunit/phpunit /var/www/html/operacionsTest.php"

# ---------------------------------------------
# EXECUTAR PROVES SEQÜENCIALMENT (més segur, per defecte)
# ---------------------------------------------
echo "=== Executant proves seqüencialment ==="
echo ""
test_ok=0
test_ko=0
for c in $containers; do
   echo "👉 Executant prova al contenidor: $c ..."
   docker exec $c $TEST_COMMAND > /dev/null
   if [ $? -eq 0 ]; then
      echo "$c - OK!!!"
      ((test_ok++))
   else
      echo "$c - FALLA!!!"
      ((test_ko++))
   fi
   echo ""
done

#--------------------------------------------
#RESUM DE LES PROVES
#--------------------------------------------
echo "=== RESUM ==="
echo "Exitoses: $test_ok"
echo "Fallides: $test_ko"
exit 0

