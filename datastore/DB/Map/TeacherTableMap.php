<?php

namespace DB\Map;

use DB\Teacher;
use DB\TeacherQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'teacher' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TeacherTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'DB.Map.TeacherTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'teacher';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\DB\\Teacher';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'DB.Teacher';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 9;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 9;

    /**
     * the column name for the id field
     */
    const COL_ID = 'teacher.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'teacher.name';

    /**
     * the column name for the contact_person_name field
     */
    const COL_CONTACT_PERSON_NAME = 'teacher.contact_person_name';

    /**
     * the column name for the dob field
     */
    const COL_DOB = 'teacher.dob';

    /**
     * the column name for the photo_url field
     */
    const COL_PHOTO_URL = 'teacher.photo_url';

    /**
     * the column name for the primary_phone field
     */
    const COL_PRIMARY_PHONE = 'teacher.primary_phone';

    /**
     * the column name for the whatsapp_number field
     */
    const COL_WHATSAPP_NUMBER = 'teacher.whatsapp_number';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'teacher.email';

    /**
     * the column name for the present_address field
     */
    const COL_PRESENT_ADDRESS = 'teacher.present_address';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Name', 'contactPerson', 'dateOfBirth', 'photoURL', 'primaryPhone', 'whatsappNumber', 'Email', 'presentAddress', ),
        self::TYPE_CAMELNAME     => array('id', 'name', 'contactPerson', 'dateOfBirth', 'photoURL', 'primaryPhone', 'whatsappNumber', 'email', 'presentAddress', ),
        self::TYPE_COLNAME       => array(TeacherTableMap::COL_ID, TeacherTableMap::COL_NAME, TeacherTableMap::COL_CONTACT_PERSON_NAME, TeacherTableMap::COL_DOB, TeacherTableMap::COL_PHOTO_URL, TeacherTableMap::COL_PRIMARY_PHONE, TeacherTableMap::COL_WHATSAPP_NUMBER, TeacherTableMap::COL_EMAIL, TeacherTableMap::COL_PRESENT_ADDRESS, ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'contact_person_name', 'dob', 'photo_url', 'primary_phone', 'whatsapp_number', 'email', 'present_address', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'contactPerson' => 2, 'dateOfBirth' => 3, 'photoURL' => 4, 'primaryPhone' => 5, 'whatsappNumber' => 6, 'Email' => 7, 'presentAddress' => 8, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'name' => 1, 'contactPerson' => 2, 'dateOfBirth' => 3, 'photoURL' => 4, 'primaryPhone' => 5, 'whatsappNumber' => 6, 'email' => 7, 'presentAddress' => 8, ),
        self::TYPE_COLNAME       => array(TeacherTableMap::COL_ID => 0, TeacherTableMap::COL_NAME => 1, TeacherTableMap::COL_CONTACT_PERSON_NAME => 2, TeacherTableMap::COL_DOB => 3, TeacherTableMap::COL_PHOTO_URL => 4, TeacherTableMap::COL_PRIMARY_PHONE => 5, TeacherTableMap::COL_WHATSAPP_NUMBER => 6, TeacherTableMap::COL_EMAIL => 7, TeacherTableMap::COL_PRESENT_ADDRESS => 8, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'contact_person_name' => 2, 'dob' => 3, 'photo_url' => 4, 'primary_phone' => 5, 'whatsapp_number' => 6, 'email' => 7, 'present_address' => 8, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('teacher');
        $this->setPhpName('Teacher');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\DB\\Teacher');
        $this->setPackage('DB');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('id', 'Id', 'INTEGER' , 'user', 'id', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 128, null);
        $this->addColumn('contact_person_name', 'contactPerson', 'VARCHAR', true, 128, null);
        $this->addColumn('dob', 'dateOfBirth', 'DATE', true, null, null);
        $this->addColumn('photo_url', 'photoURL', 'VARCHAR', true, 128, null);
        $this->addColumn('primary_phone', 'primaryPhone', 'VARCHAR', true, 15, null);
        $this->addColumn('whatsapp_number', 'whatsappNumber', 'VARCHAR', false, 15, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 128, null);
        $this->addColumn('present_address', 'presentAddress', 'VARCHAR', false, 512, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', '\\DB\\User', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':id',
    1 => ':id',
  ),
), null, null, null, false);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? TeacherTableMap::CLASS_DEFAULT : TeacherTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Teacher object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TeacherTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TeacherTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TeacherTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TeacherTableMap::OM_CLASS;
            /** @var Teacher $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TeacherTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = TeacherTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TeacherTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Teacher $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TeacherTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TeacherTableMap::COL_ID);
            $criteria->addSelectColumn(TeacherTableMap::COL_NAME);
            $criteria->addSelectColumn(TeacherTableMap::COL_CONTACT_PERSON_NAME);
            $criteria->addSelectColumn(TeacherTableMap::COL_DOB);
            $criteria->addSelectColumn(TeacherTableMap::COL_PHOTO_URL);
            $criteria->addSelectColumn(TeacherTableMap::COL_PRIMARY_PHONE);
            $criteria->addSelectColumn(TeacherTableMap::COL_WHATSAPP_NUMBER);
            $criteria->addSelectColumn(TeacherTableMap::COL_EMAIL);
            $criteria->addSelectColumn(TeacherTableMap::COL_PRESENT_ADDRESS);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.contact_person_name');
            $criteria->addSelectColumn($alias . '.dob');
            $criteria->addSelectColumn($alias . '.photo_url');
            $criteria->addSelectColumn($alias . '.primary_phone');
            $criteria->addSelectColumn($alias . '.whatsapp_number');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.present_address');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(TeacherTableMap::DATABASE_NAME)->getTable(TeacherTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TeacherTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TeacherTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TeacherTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Teacher or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Teacher object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TeacherTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \DB\Teacher) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TeacherTableMap::DATABASE_NAME);
            $criteria->add(TeacherTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = TeacherQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TeacherTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TeacherTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the teacher table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TeacherQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Teacher or Criteria object.
     *
     * @param mixed               $criteria Criteria or Teacher object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TeacherTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Teacher object
        }


        // Set the correct dbName
        $query = TeacherQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TeacherTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TeacherTableMap::buildTableMap();
