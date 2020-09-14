<?php

    //Datos Generales
    $CodigoProyecto =  $_POST['frmIdP'];
    $NombreProyecto = $_POST['frmNombreP'];
    $DescripcionProyecto = $_POST['frmDescripcionP'];
    //Beneficios y Beneficiarios
    $BeneficiosProyecto = $_POST['formBenEspe'];
    $NumeroMujeres = $_POST['formNumMujeres'];
    $NumeroHombres = $_POST['formNumHombres'];
    $NumeroViviendas = $_POST['formNumViviendas'];
    //Alineación con el Catálogo de Proyectos
    $UnidadMedida = $_POST['formUnidadMed'];
    $Anual = $_POST['formAnual'];
    $Trim1 = $_POST['formTrim1'];
    $Trim2 = $_POST['formTrim2'];
    $Trim3 = $_POST['formTrim3'];
    $Trim4 = $_POST['formTrim4'];
    //Administración del proyecto
    $DireccionGeneral = $_POST['formDirGene'];
    $Direccion = $_POST['formDirecion'];
    $Subdireccion = $_POST['formSubdireccion'];
    $jud = $_POST['formJud'];
    $rubro = $_POST['formRubro'];
    $Actividades = $_POST['formActi'];
    //Domicilio geográfico
    $Calle = $_POST['formCalle'];
    $NumeroExterior = $_POST['formNumExt'];
    $NumeroInterior = $_POST['formNumInt'];
    $Referencia = $_POST['formRef'];
    $Colonia = $_POST['formCol'];
    $CodigoPostal = $_POST['formCP'];
    //Justificación de los trabajos o apoyo
    $JustificacionTrabajo = $_POST['formJusTraApo'];
    //Presupuesto de los trabajos
    $anio = $_POST['idAnio'];
    $Obra = $_POST['idObra'];
    $Supervision = $_POST['idSpr'];
        //Agregar total
    $TotalPresupuestoTrabajo = $_POST['idTotal'];
    //Fuentes de financiamiento
    $RecursoDeuda = $_POST['idRecDeud'];
    $RecursoFiscal = $_POST['idRecFisc'];
    $RecursoFAIS = $_POST['idRecFais'];
    $RecursoFORTAMUN = $_POST['idRecFortamun'];
    $RecursoFAFEF = $_POST['idRecFafef'];
    $ParticipacionFederal = $_POST['idParFede']; 
    $Convenio = $_POST['idConvenio'];
    //Agregar valor a total
    $TotalFuentesFinanciamiento = $_POST['idFuenteFinTotal'];
    //Calendario de ejecución
    $porcentajeMes1 = $_POST['idPorcentajeMes1'];
    $porcentajeMes2 = $_POST['idPorcentajeMes2'];
    $porcentajeMes3 = $_POST['idPorcentajeMes3'];
    $porcentajeMes4 = $_POST['idPorcentajeMes4'];
    $porcentajeMes5 = $_POST['idPorcentajeMes5'];
    $porcentajeMes6 = $_POST['idPorcentajeMes6'];

    $montoMes1 = $_POST['idMontoMes1'];
    $montoMes2 = $_POST['idMontoMes2'];
    $montoMes3 = $_POST['idMontoMes3'];
    $montoMes4 = $_POST['idMontoMes4'];
    $montoMes5 = $_POST['idMontoMes5'];
    $montoMes6 = $_POST['idMontoMes6'];
    //Periodo de ejecución y fechas estimadas
    $PlazoEjecucion = $_POST['idPlzEje'];
    $FechaInicio = $_POST['idFechaInicio'];
    $FechaFin = $_POST['idFechaFin'];
    //Número de empleos generados
    $TotalEmpleos = $_POST['idTotalEmpGen'];
    $Derectos = $_POST['idDirectos'];
    $Indirectos = $_POST['idIndirectos'];
    //Datos Personales
    $areaElabora = $_POST['areaElabora'];
    $nombreElabora = $_POST['nombreElabora'];
    $areaRevisa = $_POST['areaRevisa'];
    $nomreRevisa = $_POST['nombreRevisa'];
    $areaAutoriza = $_POST['areaAutoriza'];
    $nombreAutoriza = $_POST['nombreAutoriza'];
    
    $param = array(
        $CodigoProyecto,
        $NombreProyecto,
        $DescripcionProyecto,
        $BeneficiosProyecto,
        $NumeroMujeres,
        $NumeroHombres,
        $NumeroViviendas,
        $UnidadMedida,
        $Anual,
        $Trim1,
        $Trim2,
        $Trim3,
        $Trim4,
        $DireccionGeneral,
        $Direccion,
        $Subdireccion,
        $jud,
        $rubro,
        $Actividades,
        $Calle,
        $NumeroExterior,
        $NumeroInterior,
        $Referencia,
        $Colonia,
        $CodigoPostal,
        $JustificacionTrabajo,
        $anio,
        $Obra,
        $Supervision,
        $TotalPresupuestoTrabajo,
        $RecursoDeuda,
        $RecursoFiscal,
        $RecursoFAIS,
        $RecursoFORTAMUN,
        $RecursoFAFEF,
        $ParticipacionFederal,
        $Convenio,
        $TotalFuentesFinanciamiento,
        $porcentajeMes1,
        $porcentajeMes2,
        $porcentajeMes3,
        $porcentajeMes4,
        $porcentajeMes5,
        $porcentajeMes6,
        $montoMes1,
        $montoMes2,
        $montoMes3,
        $montoMes4,
        $montoMes5,
        $montoMes6,
        $PlazoEjecucion,
        $FechaInicio,
        $FechaFin,
        $TotalEmpleos,
        $Derectos,
        $Indirectos,
        $areaElabora,
        $nombreElabora,
        $areaRevisa,
        $nomreRevisa,
        $areaAutoriza,
        $nombreAutoriza
    );
    
    DBInsert(DBConnect(),$param);

    function DBConnect(){
        $serverName = "189.213.198.72";
        $connectionInfo = array("Database"=>"Tlalpan","UID"=>"usr_tlalpan", "PWD"=>"tlalpan2020*");
        $conn = sqlsrv_connect($serverName,$connectionInfo);
        if($conn){
            echo "Conexión Establecida.<br/>";
        }else{
            echo "Conexión no se pudo establecer.<br/>";
            die(print_r(sqlsrv_errors(),true));
        }

        return $conn;
    }

    function DBInsert($conn, $param){

        print_r($param);
        echo "<br/>";

        
        $query = "INSERT INTO dbo.RegistrosTlalpan
        (codigoProyecto
        ,nombreProyecto
        ,descripcionProyecto
        ,beneficiosEsperados
        ,numeroMujeres
        ,numeroHombres
        ,numeroViviendas
        ,unidadMedicion
        ,metaAnual
        ,trim1
        ,trim2
        ,trim3
        ,trim4
        ,direccionGeneral
        ,direccion
        ,subdireccion
        ,jud
        ,rubro
        ,actividades
        ,calle
        ,numeroExterior
        ,numeroInterior
        ,referencia
        ,colonia
        ,codigoPostal
        ,justificacion
        ,año
        ,obra
        ,supervision
        ,totalObra
        ,recaudarDeuda
        ,recursoFiscal
        ,recursoFAIS
        ,recursoFortamun
        ,recursoFafef
        ,participacionFederal
        ,convenio
        ,total
        ,porcentajeMes1
        ,porcentajeMes2
        ,porcentajeMes3
        ,porcentajeMes4
        ,porcentajeMes5
        ,porcentajeMes6
        ,montoMes1
        ,montoMes2
        ,montoMes3
        ,montoMes4
        ,montoMes5
        ,montoMes6
        ,plazoEjecucion
        ,fechaInicio
        ,fechaFin
        ,totalGenerados
        ,empleosDirectos
        ,empleosIndirectos
        ,areaElabora
        ,nombreElabora
        ,areaRevisa
        ,nombreRevisa
        ,areaAutoriza
        ,nombreAutoriza)
        VALUES
        ('$param[0]'
        ,'$param[1]'
        ,'$param[2]'
        ,'$param[3]'
        ,'$param[4]'
        ,'$param[5]'
        ,'$param[6]'
        ,'$param[7]'
        ,'$param[8]'
        ,'$param[9]'
        ,'$param[10]'
        ,'$param[11]'
        ,'$param[12]'
        ,'$param[13]'
        ,'$param[14]'
        ,'$param[15]'
        ,'$param[16]'
        ,'$param[17]'
        ,'$param[18]'
        ,'$param[19]'
        ,'$param[20]'
        ,'$param[21]'
        ,'$param[22]'
        ,'$param[23]'
        ,'$param[24]'
        ,'$param[25]'
        ,'$param[26]'
        ,'$param[27]'
        ,'$param[28]'
        ,'$param[29]'
        ,'$param[30]'
        ,'$param[31]'
        ,'$param[32]'
        ,'$param[33]'
        ,'$param[34]'
        ,'$param[35]'
        ,'$param[36]'
        ,'$param[37]'
        ,'$param[38]'
        ,'$param[39]'
        ,'$param[40]'
        ,'$param[41]'
        ,'$param[42]'
        ,'$param[43]'
        ,'$param[44]'
        ,'$param[45]'
        ,'$param[46]'
        ,'$param[47]'
        ,'$param[48]'
        ,'$param[49]'
        ,'$param[50]'
        ,'$param[51]'
        ,'$param[52]'
        ,'$param[53]'
        ,'$param[54]'
        ,'$param[55]'
        ,'$param[56]'
        ,'$param[57]'
        ,'$param[58]'
        ,'$param[59]'
        ,'$param[60]'
        ,'$param[61]')";

        $sql = utf8_decode($query);
        
        echo $sql;
        echo "<br/>";

        $stmt = sqlsrv_query( $conn, $sql);

        echo $stmt;

        if( $stmt === false ) {
            die( print_r( sqlsrv_errors(), true));
            
        }
    }
    

?>